<?php

return [
    'share_logs' => 'Del logger',
    'share_file' => 'Del',
    'uploaded' => 'Logger lastet opp til PasteFox',
    'file_uploaded' => 'Fil lastet opp til PasteFox',
    'upload_failed' => 'Opplasting mislyktes',
    'api_key_missing' => 'PasteFox API-nøkkel er ikke konfigurert. Legg den til i plugin-innstillingene.',
    'expires_7_days' => '⚠️ Uten API-nøkkel utløper paste etter 7 dager',

    // Settings
    'settings_saved' => 'Innstillinger lagret',
    'section_api' => 'API-konfigurasjon',
    'section_api_description' => 'Uten API-nøkkel utløper pastes etter 7 dager og er alltid offentlige.',
    'section_paste' => 'Paste-innstillinger',
    'api_key' => 'API-nøkkel',
    'api_key_helper' => 'Valgfritt – Hent API-nøkkelen din fra https://pastefox.com/dashboard',
    'visibility' => 'Synlighet',
    'visibility_public' => 'Offentlig',
    'visibility_private' => 'Privat (krever API-nøkkel)',
    'visibility_helper' => 'Private pastes krever en API-nøkkel',
    'effect' => 'Visuell effekt',
    'effect_none' => 'Ingen',
    'effect_matrix' => 'Matrix-regn',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Konfetti',
    'effect_scratch' => 'Skrapelodd',
    'effect_puzzle' => 'Pusselavsløring',
    'effect_slots' => 'Spilleautomat',
    'effect_shake' => 'Risting',
    'effect_fireworks' => 'Fyrverkeri',
    'effect_typewriter' => 'Skrivemaskin',
    'effect_blur' => 'Uskarphet-avsløring',
    'password' => 'Passordbeskyttelse',
    'password_helper' => 'Valgfritt – 4-100 tegn',

    // Custom Domain
    'section_custom_domain' => 'Eget domene',
    'section_custom_domain_description' => 'Bruk ditt eget domene for å dele pastes. Krever API-nøkkel. Administrer domener under Kontrollpanel → Egne domener.',
    'custom_domain' => 'Eget domene',
    'custom_domain_none' => 'Ingen (bruk pastefox.com)',
    'custom_domain_helper' => 'Velg et verifisert domene for paste-URL-er',
    'custom_domain_no_api_key' => 'API-nøkkel kreves for egne domener',
    'custom_domain_fetch_error' => 'Kunne ikke hente domener',
    'custom_domain_inactive' => 'inaktiv',

    // File sharing
    'file_not_found' => 'Fil ikke funnet',
    'file_type_not_allowed' => 'Denne filtypen kan ikke deles. Kun tekstbaserte filer (log, txt, cfg, json, yaml, osv.) støttes.',

    // Advanced
    'section_advanced' => 'Avanserte innstillinger',
    'section_advanced_description' => 'Feilsøkingslogging og funksjonsinnstillinger.',
    'file_sharing' => 'Fildeling',
    'file_sharing_helper' => 'Tillat deling av filer fra filredigereren via PasteFox.',
    'debug' => 'Feilsøkingslogging',
    'debug_helper' => 'Logg alle PasteFox Share-handlinger til Laravel-loggfilen for feilsøking.',
];
