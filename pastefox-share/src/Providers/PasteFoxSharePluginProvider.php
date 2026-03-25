<?php

namespace FlexKleks\PasteFoxShare\Providers;

use App\Enums\HeaderActionPosition;
use App\Filament\Server\Pages\Console;
use App\Filament\Server\Resources\Files\Pages\EditFiles;
use FlexKleks\PasteFoxShare\Filament\Components\Actions\ShareFileAction;
use FlexKleks\PasteFoxShare\Filament\Components\Actions\UploadLogsAction;
use Illuminate\Support\ServiceProvider;

class PasteFoxSharePluginProvider extends ServiceProvider
{
    public function register(): void
    {
        Console::registerCustomHeaderActions(HeaderActionPosition::Before, UploadLogsAction::make());
        EditFiles::registerCustomHeaderActions(HeaderActionPosition::Before, ShareFileAction::make());
    }

    public function boot(): void {}
}
