<?php

return [
    'share_logs' => 'Zdieľať logy',
    'share_file' => 'Zdieľať',
    'uploaded' => 'Logy nahrané na PasteFox',
    'file_uploaded' => 'Súbor nahraný na PasteFox',
    'upload_failed' => 'Nahrávanie zlyhalo',
    'api_key_missing' => 'API kľúč PasteFox nie je nakonfigurovaný. Pridajte ho v nastaveniach pluginu.',
    'expires_7_days' => '⚠️ Bez API kľúča paste vyprší za 7 dní',

    // Settings
    'settings_saved' => 'Nastavenia uložené',
    'section_api' => 'Konfigurácia API',
    'section_api_description' => 'Bez API kľúča pasty vypršia po 7 dňoch a sú vždy verejné.',
    'section_paste' => 'Nastavenia paste',
    'api_key' => 'API kľúč',
    'api_key_helper' => 'Voliteľné – Získajte API kľúč na https://pastefox.com/dashboard',
    'visibility' => 'Viditeľnosť',
    'visibility_public' => 'Verejný',
    'visibility_private' => 'Súkromný (vyžaduje API kľúč)',
    'visibility_helper' => 'Súkromné pasty vyžadujú API kľúč',
    'effect' => 'Vizuálny efekt',
    'effect_none' => 'Žiadny',
    'effect_matrix' => 'Matrix dážď',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Konfety',
    'effect_scratch' => 'Stierací žreb',
    'effect_puzzle' => 'Odhalenie puzzle',
    'effect_slots' => 'Hrací automat',
    'effect_shake' => 'Trasenie',
    'effect_fireworks' => 'Ohňostroj',
    'effect_typewriter' => 'Písací stroj',
    'effect_blur' => 'Odhalenie rozmazania',
    'password' => 'Ochrana heslom',
    'password_helper' => 'Voliteľné – 4-100 znakov',

    // Custom Domain
    'section_custom_domain' => 'Vlastná doména',
    'section_custom_domain_description' => 'Použite vlastnú doménu na zdieľanie pastov. Vyžaduje API kľúč. Spravujte domény v Nástenka → Vlastné domény.',
    'custom_domain' => 'Vlastná doména',
    'custom_domain_none' => 'Žiadna (použiť pastefox.com)',
    'custom_domain_helper' => 'Vyberte overenú doménu pre URL paste',
    'custom_domain_no_api_key' => 'Pre vlastné domény je vyžadovaný API kľúč',
    'custom_domain_fetch_error' => 'Domény sa nepodarilo načítať',
    'custom_domain_inactive' => 'neaktívna',

    // File sharing
    'file_not_found' => 'Súbor nenájdený',
    'file_type_not_allowed' => 'Tento typ súboru nie je možné zdieľať. Podporované sú iba textové súbory (log, txt, cfg, json, yaml atď.).',

    // Advanced
    'section_advanced' => 'Pokročilé nastavenia',
    'section_advanced_description' => 'Ladiace protokolovanie a prepínače funkcií.',
    'file_sharing' => 'Zdieľanie súborov',
    'file_sharing_helper' => 'Povoliť zdieľanie súborov z editora cez PasteFox.',
    'debug' => 'Ladiace protokolovanie',
    'debug_helper' => 'Zaznamenávať všetky akcie PasteFox Share do súboru protokolu Laravel na riešenie problémov.',
];
