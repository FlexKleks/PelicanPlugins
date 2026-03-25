<?php

namespace FlexKleks\PasteFoxShare\Filament\Components\Actions;

use App\Models\Server;
use App\Repositories\Daemon\DaemonFileRepository;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Notifications\Notification;
use Filament\Support\Enums\Size;
use FlexKleks\PasteFoxShare\Concerns\HasPasteFoxLogging;
use Illuminate\Support\Facades\Http;

class ShareFileAction extends Action
{
    use HasPasteFoxLogging;
    protected static array $allowedExtensions = [
        'log', 'txt', 'cfg', 'conf', 'config', 'ini', 'json', 'xml', 'yaml', 'yml',
        'properties', 'toml', 'env', 'csv', 'md', 'html', 'css', 'js', 'ts',
        'php', 'py', 'java', 'lua', 'sh', 'bash', 'bat', 'cmd', 'ps1',
        'sql', 'htaccess', 'nginx', 'vhost', 'service', 'timer',
        'sk', 'mcmeta', 'lang', 'lore',
    ];

    public static function getDefaultName(): ?string
    {
        return 'share_file_pastefox';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label(fn () => trans('pastefox-share::messages.share_file'));

        $this->icon('tabler-share');

        $this->color('primary');

        $this->size(Size::ExtraLarge);

        $this->hidden(function () {
            if (!config('pastefox-share.file_sharing', true)) {
                return true;
            }

            $livewire = $this->getLivewire();
            $path = $livewire->path ?? '';

            if (blank($path)) {
                return true;
            }

            $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

            return !in_array($extension, static::$allowedExtensions);
        });

        $this->action(function () {
            /** @var Server $server */
            $server = Filament::getTenant();
            $livewire = $this->getLivewire();
            $path = $livewire->path ?? '';

            self::logInfo('File share action triggered', [
                'path' => $path,
                'server' => $server->name,
            ]);

            if (blank($path)) {
                Notification::make()
                    ->title(trans('pastefox-share::messages.upload_failed'))
                    ->body(trans('pastefox-share::messages.file_not_found'))
                    ->danger()
                    ->send();

                return;
            }

            $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
            if (!in_array($extension, static::$allowedExtensions)) {
                Notification::make()
                    ->title(trans('pastefox-share::messages.upload_failed'))
                    ->body(trans('pastefox-share::messages.file_type_not_allowed'))
                    ->danger()
                    ->send();

                return;
            }

            try {
                $fileRepository = (new DaemonFileRepository())->setServer($server);
                $content = $fileRepository->getContent($path, 5 * 1024 * 1024);

                $fileName = basename($path);
                $language = $this->detectLanguage($extension);

                $apiKey = config('pastefox-share.api_key');
                $validApiKey = $this->isApiKeyValid($apiKey);

                $headers = ['Content-Type' => 'application/json'];

                $payload = [
                    'content' => $content,
                    'title' => $fileName . ' - ' . $server->name . ' - ' . now()->format('Y-m-d H:i:s'),
                    'language' => $language,
                    'effect' => config('pastefox-share.effect'),
                ];

                if ($validApiKey) {
                    $headers['X-API-Key'] = $apiKey;
                    $payload['visibility'] = config('pastefox-share.visibility');

                    $password = config('pastefox-share.password');
                    if (filled($password)) {
                        $payload['password'] = $password;
                    }
                }

                self::logDebug('Uploading file to PasteFox', [
                    'file' => $fileName,
                    'language' => $language,
                    'has_api_key' => $validApiKey,
                    'content_length' => strlen($content),
                ]);

                $response = Http::withHeaders($headers)
                    ->timeout(30)
                    ->connectTimeout(5)
                    ->throw()
                    ->post('https://pastefox.com/api/pastes', $payload)
                    ->json();

                if ($response['success']) {
                    $customDomain = $validApiKey ? $this->getActiveCustomDomain($apiKey) : null;
                    $baseUrl = filled($customDomain) ? "https://{$customDomain}" : 'https://pastefox.com';
                    $url = $baseUrl . '/' . $response['data']['slug'];

                    $body = $url;
                    if (!$validApiKey) {
                        $body .= "\n" . trans('pastefox-share::messages.expires_7_days');
                    }

                    self::logInfo('File uploaded successfully', [
                        'file' => $fileName,
                        'url' => $url,
                    ]);

                    Notification::make()
                        ->title(trans('pastefox-share::messages.file_uploaded'))
                        ->body($body)
                        ->persistent()
                        ->success()
                        ->send();
                } else {
                    self::logWarning('Upload failed', [
                        'file' => $fileName,
                        'error' => $response['error'] ?? 'Unknown error',
                    ]);

                    Notification::make()
                        ->title(trans('pastefox-share::messages.upload_failed'))
                        ->body($response['error'] ?? 'Unknown error')
                        ->danger()
                        ->send();
                }
            } catch (Exception $exception) {
                self::logError('Exception during file upload', [
                    'path' => $path,
                    'error' => $exception->getMessage(),
                    'trace' => $exception->getTraceAsString(),
                ]);

                report($exception);

                Notification::make()
                    ->title(trans('pastefox-share::messages.upload_failed'))
                    ->body($exception->getMessage())
                    ->danger()
                    ->send();
            }
        });
    }

    protected function detectLanguage(string $extension): string
    {
        return match ($extension) {
            'log' => 'log',
            'json', 'mcmeta' => 'json',
            'xml' => 'xml',
            'yaml', 'yml' => 'yaml',
            'ini', 'properties', 'cfg', 'conf', 'config' => 'ini',
            'toml' => 'toml',
            'html' => 'html',
            'css' => 'css',
            'js', 'ts' => 'javascript',
            'php' => 'php',
            'py' => 'python',
            'java' => 'java',
            'lua' => 'lua',
            'sh', 'bash' => 'bash',
            'bat', 'cmd' => 'batch',
            'ps1' => 'powershell',
            'sql' => 'sql',
            'md' => 'markdown',
            'csv', 'txt', 'env' => 'plaintext',
            default => 'plaintext',
        };
    }

    protected function getActiveCustomDomain(?string $apiKey): ?string
    {
        $configuredDomain = config('pastefox-share.custom_domain');

        if (blank($configuredDomain) || blank($apiKey)) {
            return null;
        }

        try {
            $response = Http::withHeaders([
                'X-API-Key' => $apiKey,
                'Content-Type' => 'application/json',
            ])
                ->timeout(5)
                ->get('https://pastefox.com/api/domains')
                ->json();

            if ($response['success'] ?? false) {
                foreach ($response['domains'] ?? [] as $domain) {
                    if ($domain['domain'] === $configuredDomain && ($domain['isActive'] ?? false)) {
                        return $configuredDomain;
                    }
                }
            }
        } catch (Exception $e) {
            self::logWarning('Failed to fetch custom domains', ['error' => $e->getMessage()]);
        }

        return null;
    }

    protected function isApiKeyValid(?string $apiKey): bool
    {
        if (blank($apiKey)) {
            return false;
        }

        try {
            $response = Http::withHeaders([
                'X-API-Key' => $apiKey,
                'Content-Type' => 'application/json',
            ])
                ->timeout(5)
                ->get('https://pastefox.com/api/domains')
                ->json();

            return $response['success'] ?? false;
        } catch (Exception $e) {
            self::logWarning('API key validation failed', ['error' => $e->getMessage()]);

            return false;
        }
    }
}
