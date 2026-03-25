<?php

return [
    'share_logs' => 'Logs delen',
    'share_file' => 'Delen',
    'uploaded' => 'Logs geüpload naar PasteFox',
    'file_uploaded' => 'Bestand geüpload naar PasteFox',
    'upload_failed' => 'Upload mislukt',
    'api_key_missing' => 'PasteFox API-sleutel niet geconfigureerd. Voeg deze toe in de plugin-instellingen.',
    'expires_7_days' => '⚠️ Zonder API-sleutel verloopt de paste na 7 dagen',

    // Settings
    'settings_saved' => 'Instellingen opgeslagen',
    'section_api' => 'API-configuratie',
    'section_api_description' => 'Zonder API-sleutel verlopen pastes na 7 dagen en zijn altijd openbaar.',
    'section_paste' => 'Paste-instellingen',
    'api_key' => 'API-sleutel',
    'api_key_helper' => 'Optioneel – Haal je API-sleutel op via https://pastefox.com/dashboard',
    'visibility' => 'Zichtbaarheid',
    'visibility_public' => 'Openbaar',
    'visibility_private' => 'Privé (vereist API-sleutel)',
    'visibility_helper' => 'Privé pastes vereisen een API-sleutel',
    'effect' => 'Visueel effect',
    'effect_none' => 'Geen',
    'effect_matrix' => 'Matrix-regen',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Confetti',
    'effect_scratch' => 'Kraskaart',
    'effect_puzzle' => 'Puzzelonthulling',
    'effect_slots' => 'Gokautomaat',
    'effect_shake' => 'Schudden',
    'effect_fireworks' => 'Vuurwerk',
    'effect_typewriter' => 'Typemachine',
    'effect_blur' => 'Vervagingsonthulling',
    'password' => 'Wachtwoordbeveiliging',
    'password_helper' => 'Optioneel – 4-100 tekens',

    // Custom Domain
    'section_custom_domain' => 'Eigen domein',
    'section_custom_domain_description' => 'Gebruik je eigen domein om pastes te delen. Vereist API-sleutel. Beheer domeinen via Dashboard → Eigen domeinen.',
    'custom_domain' => 'Eigen domein',
    'custom_domain_none' => 'Geen (pastefox.com gebruiken)',
    'custom_domain_helper' => 'Selecteer een geverifieerd domein voor paste-URLs',
    'custom_domain_no_api_key' => 'API-sleutel vereist voor eigen domeinen',
    'custom_domain_fetch_error' => 'Domeinen konden niet worden opgehaald',
    'custom_domain_inactive' => 'inactief',

    // File sharing
    'file_not_found' => 'Bestand niet gevonden',
    'file_type_not_allowed' => 'Dit bestandstype kan niet worden gedeeld. Alleen tekstbestanden (log, txt, cfg, json, yaml, etc.) worden ondersteund.',

    // Advanced
    'section_advanced' => 'Geavanceerde instellingen',
    'section_advanced_description' => 'Debug-logging en functie-instellingen.',
    'file_sharing' => 'Bestanden delen',
    'file_sharing_helper' => 'Sta het delen van bestanden vanuit de bestandseditor via PasteFox toe.',
    'debug' => 'Debug-logging',
    'debug_helper' => 'Log alle PasteFox Share acties naar het Laravel-logbestand voor probleemoplossing.',
];
