<?php

namespace FlexKleks\PasteFoxShare\Concerns;

use Illuminate\Support\Facades\Log;

trait HasPasteFoxLogging
{
    protected static function logDebug(string $message, array $context = []): void
    {
        if (config('pastefox-share.debug', false)) {
            Log::channel('daily')->debug("[PasteFox Share] $message", $context);
        }
    }

    protected static function logInfo(string $message, array $context = []): void
    {
        if (config('pastefox-share.debug', false)) {
            Log::channel('daily')->info("[PasteFox Share] $message", $context);
        }
    }

    protected static function logWarning(string $message, array $context = []): void
    {
        if (config('pastefox-share.debug', false)) {
            Log::channel('daily')->warning("[PasteFox Share] $message", $context);
        }
    }

    protected static function logError(string $message, array $context = []): void
    {
        // Errors always log, regardless of debug setting
        Log::channel('daily')->error("[PasteFox Share] $message", $context);
    }
}
