<?php

return [
    'share_logs' => 'Logs teilen',
    'share_file' => 'Teilen',
    'uploaded' => 'Logs auf PasteFox hochgeladen',
    'file_uploaded' => 'Datei auf PasteFox hochgeladen',
    'upload_failed' => 'Upload fehlgeschlagen',
    'api_key_missing' => 'PasteFox API-Schlüssel nicht konfiguriert. Füge ihn in den Plugin-Einstellungen hinzu.',
    'expires_7_days' => '⚠️ Ohne API-Schlüssel läuft der Paste nach 7 Tagen ab',

    // Settings
    'settings_saved' => 'Einstellungen gespeichert',
    'section_api' => 'API-Konfiguration',
    'section_api_description' => 'Ohne API-Schlüssel laufen Pastes nach 7 Tagen ab und sind immer öffentlich.',
    'section_paste' => 'Paste-Einstellungen',
    'api_key' => 'API-Schlüssel',
    'api_key_helper' => 'Optional – Hole deinen API-Schlüssel von https://pastefox.com/dashboard',
    'visibility' => 'Sichtbarkeit',
    'visibility_public' => 'Öffentlich',
    'visibility_private' => 'Privat (erfordert API-Schlüssel)',
    'visibility_helper' => 'Private Pastes erfordern einen API-Schlüssel',
    'effect' => 'Visueller Effekt',
    'effect_none' => 'Keiner',
    'effect_matrix' => 'Matrix-Regen',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Konfetti',
    'effect_scratch' => 'Rubbelkarte',
    'effect_puzzle' => 'Puzzle-Enthüllung',
    'effect_slots' => 'Spielautomat',
    'effect_shake' => 'Schütteln',
    'effect_fireworks' => 'Feuerwerk',
    'effect_typewriter' => 'Schreibmaschine',
    'effect_blur' => 'Unschärfe-Enthüllung',
    'password' => 'Passwortschutz',
    'password_helper' => 'Optional – 4-100 Zeichen',

    // Custom Domain
    'section_custom_domain' => 'Eigene Domain',
    'section_custom_domain_description' => 'Verwende deine eigene Domain zum Teilen von Pastes. Erfordert API-Schlüssel. Domains verwalten unter Dashboard → Eigene Domains.',
    'custom_domain' => 'Eigene Domain',
    'custom_domain_none' => 'Keine (pastefox.com verwenden)',
    'custom_domain_helper' => 'Wähle eine verifizierte Domain für Paste-URLs',
    'custom_domain_no_api_key' => 'API-Schlüssel für eigene Domains erforderlich',
    'custom_domain_fetch_error' => 'Domains konnten nicht abgerufen werden',
    'custom_domain_inactive' => 'inaktiv',

    // File sharing
    'file_not_found' => 'Datei nicht gefunden',
    'file_type_not_allowed' => 'Dieser Dateityp kann nicht geteilt werden. Nur textbasierte Dateien (log, txt, cfg, json, yaml, etc.) werden unterstützt.',

    // Advanced
    'section_advanced' => 'Erweiterte Einstellungen',
    'section_advanced_description' => 'Debug-Logging und Feature-Schalter.',
    'file_sharing' => 'Datei-Sharing',
    'file_sharing_helper' => 'Erlaubt das Teilen von Dateien aus dem Datei-Editor über PasteFox.',
    'debug' => 'Debug-Logging',
    'debug_helper' => 'Alle PasteFox Share Aktionen in die Laravel-Logdatei schreiben zur Fehlerbehebung.',
];
