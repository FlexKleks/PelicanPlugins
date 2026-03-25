<?php

return [
    'share_logs' => 'Del logs',
    'share_file' => 'Del',
    'uploaded' => 'Logs uploadet til PasteFox',
    'file_uploaded' => 'Fil uploadet til PasteFox',
    'upload_failed' => 'Upload mislykkedes',
    'api_key_missing' => 'PasteFox API-nøgle ikke konfigureret. Tilføj den i plugin-indstillingerne.',
    'expires_7_days' => '⚠️ Uden API-nøgle udløber paste efter 7 dage',

    // Settings
    'settings_saved' => 'Indstillinger gemt',
    'section_api' => 'API-konfiguration',
    'section_api_description' => 'Uden API-nøgle udløber pastes efter 7 dage og er altid offentlige.',
    'section_paste' => 'Paste-indstillinger',
    'api_key' => 'API-nøgle',
    'api_key_helper' => 'Valgfrit – Hent din API-nøgle fra https://pastefox.com/dashboard',
    'visibility' => 'Synlighed',
    'visibility_public' => 'Offentlig',
    'visibility_private' => 'Privat (kræver API-nøgle)',
    'visibility_helper' => 'Private pastes kræver en API-nøgle',
    'effect' => 'Visuel effekt',
    'effect_none' => 'Ingen',
    'effect_matrix' => 'Matrix-regn',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Konfetti',
    'effect_scratch' => 'Skrabelod',
    'effect_puzzle' => 'Puslespil-afsløring',
    'effect_slots' => 'Spilleautomat',
    'effect_shake' => 'Rystelse',
    'effect_fireworks' => 'Fyrværkeri',
    'effect_typewriter' => 'Skrivemaskine',
    'effect_blur' => 'Sløret afsløring',
    'password' => 'Adgangskodebeskyttelse',
    'password_helper' => 'Valgfrit – 4-100 tegn',

    // Custom Domain
    'section_custom_domain' => 'Eget domæne',
    'section_custom_domain_description' => 'Brug dit eget domæne til at dele pastes. Kræver API-nøgle. Administrer domæner under Dashboard → Egne domæner.',
    'custom_domain' => 'Eget domæne',
    'custom_domain_none' => 'Ingen (brug pastefox.com)',
    'custom_domain_helper' => 'Vælg et verificeret domæne til paste-URL\'er',
    'custom_domain_no_api_key' => 'API-nøgle kræves for egne domæner',
    'custom_domain_fetch_error' => 'Domæner kunne ikke hentes',
    'custom_domain_inactive' => 'inaktiv',

    // File sharing
    'file_not_found' => 'Fil ikke fundet',
    'file_type_not_allowed' => 'Denne filtype kan ikke deles. Kun tekstbaserede filer (log, txt, cfg, json, yaml, osv.) understøttes.',

    // Advanced
    'section_advanced' => 'Avancerede indstillinger',
    'section_advanced_description' => 'Fejlsøgningslogning og funktionsindstillinger.',
    'file_sharing' => 'Fildeling',
    'file_sharing_helper' => 'Tillad deling af filer fra fileditoren via PasteFox.',
    'debug' => 'Fejlsøgningslogning',
    'debug_helper' => 'Log alle PasteFox Share handlinger til Laravel-logfilen til fejlsøgning.',
];
