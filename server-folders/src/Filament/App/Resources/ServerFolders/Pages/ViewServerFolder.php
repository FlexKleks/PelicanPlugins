<?php

namespace FlexKleks\ServerFolders\Filament\App\Resources\ServerFolders\Pages;

use App\Models\Server;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use FlexKleks\ServerFolders\Filament\App\Resources\ServerFolders\ServerFolderResource;
use Illuminate\Contracts\Support\Htmlable;

class ViewServerFolder extends Page
{
    use InteractsWithRecord;

    protected static string $resource = ServerFolderResource::class;

    protected string $view = 'server-folders::view-folder';

    public function mount(int|string $record): void
    {
        $this->record = $this->resolveRecord($record);

        abort_unless($this->record->user_id === auth()->id(), 403);
    }

    public function getTitle(): string|Htmlable
    {
        return $this->record->name;
    }

    public function getBreadcrumb(): string
    {
        return $this->record->name;
    }

    public function getServers()
    {
        return $this->record->servers()->with(['egg', 'node', 'allocation'])->get();
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('addServer')
                ->label(trans('server-folders::messages.add_server'))
                ->icon('tabler-plus')
                ->form([
                    Select::make('server_id')
                        ->label(trans('server-folders::messages.select_server'))
                        ->options(function () {
                            $existingIds = $this->record->servers->pluck('id')->toArray();

                            return auth()->user()->accessibleServers()
                                ->whereNotIn('servers.id', $existingIds)
                                ->pluck('servers.name', 'servers.id');
                        })
                        ->searchable()
                        ->required(),
                ])
                ->action(function (array $data) {
                    $this->record->servers()->attach($data['server_id']);

                    Notification::make()
                        ->title(trans('server-folders::messages.server_added'))
                        ->success()
                        ->send();
                }),
            Action::make('edit')
                ->label(trans('server-folders::messages.edit'))
                ->icon('tabler-pencil')
                ->color('gray')
                ->form([
                    TextInput::make('name')
                        ->label(trans('server-folders::messages.folder_name'))
                        ->required()
                        ->maxLength(50)
                        ->default(fn () => $this->record->name),
                    ColorPicker::make('color')
                        ->label(trans('server-folders::messages.color'))
                        ->default(fn () => $this->record->color),
                ])
                ->action(function (array $data) {
                    $this->record->update($data);

                    Notification::make()
                        ->title(trans('server-folders::messages.folder_updated'))
                        ->success()
                        ->send();
                }),
            DeleteAction::make()
                ->record($this->record)
                ->successRedirectUrl(ServerFolderResource::getUrl()),
        ];
    }

    public function removeServer(int $serverId): void
    {
        $this->record->servers()->detach($serverId);

        Notification::make()
            ->title(trans('server-folders::messages.server_removed'))
            ->success()
            ->send();
    }
}
