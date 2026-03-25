<?php

return [
    'share_logs' => 'Dela loggar',
    'share_file' => 'Dela',
    'uploaded' => 'Loggar uppladdade till PasteFox',
    'file_uploaded' => 'Fil uppladdad till PasteFox',
    'upload_failed' => 'Uppladdning misslyckades',
    'api_key_missing' => 'PasteFox API-nyckel inte konfigurerad. Lägg till den i plugin-inställningarna.',
    'expires_7_days' => '⚠️ Utan API-nyckel löper paste ut efter 7 dagar',

    // Settings
    'settings_saved' => 'Inställningar sparade',
    'section_api' => 'API-konfiguration',
    'section_api_description' => 'Utan API-nyckel löper pastes ut efter 7 dagar och är alltid offentliga.',
    'section_paste' => 'Paste-inställningar',
    'api_key' => 'API-nyckel',
    'api_key_helper' => 'Valfritt – Hämta din API-nyckel från https://pastefox.com/dashboard',
    'visibility' => 'Synlighet',
    'visibility_public' => 'Offentlig',
    'visibility_private' => 'Privat (kräver API-nyckel)',
    'visibility_helper' => 'Privata pastes kräver en API-nyckel',
    'effect' => 'Visuell effekt',
    'effect_none' => 'Ingen',
    'effect_matrix' => 'Matrix-regn',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Konfetti',
    'effect_scratch' => 'Skrapkort',
    'effect_puzzle' => 'Pusselavslöjande',
    'effect_slots' => 'Spelautomat',
    'effect_shake' => 'Skakning',
    'effect_fireworks' => 'Fyrverkeri',
    'effect_typewriter' => 'Skrivmaskin',
    'effect_blur' => 'Suddighetsavslöjande',
    'password' => 'Lösenordsskydd',
    'password_helper' => 'Valfritt – 4-100 tecken',

    // Custom Domain
    'section_custom_domain' => 'Egen domän',
    'section_custom_domain_description' => 'Använd din egen domän för att dela pastes. Kräver API-nyckel. Hantera domäner under Kontrollpanel → Egna domäner.',
    'custom_domain' => 'Egen domän',
    'custom_domain_none' => 'Ingen (använd pastefox.com)',
    'custom_domain_helper' => 'Välj en verifierad domän för paste-URL:er',
    'custom_domain_no_api_key' => 'API-nyckel krävs för egna domäner',
    'custom_domain_fetch_error' => 'Domäner kunde inte hämtas',
    'custom_domain_inactive' => 'inaktiv',

    // File sharing
    'file_not_found' => 'Filen hittades inte',
    'file_type_not_allowed' => 'Denna filtyp kan inte delas. Endast textbaserade filer (log, txt, cfg, json, yaml, etc.) stöds.',

    // Advanced
    'section_advanced' => 'Avancerade inställningar',
    'section_advanced_description' => 'Felsökningsloggning och funktionsinställningar.',
    'file_sharing' => 'Fildelning',
    'file_sharing_helper' => 'Tillåt delning av filer från filredigeraren via PasteFox.',
    'debug' => 'Felsökningsloggning',
    'debug_helper' => 'Logga alla PasteFox Share-åtgärder till Laravel-loggfilen för felsökning.',
];
