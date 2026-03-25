<?php

return [
    'share_logs' => 'Logok megosztása',
    'share_file' => 'Megosztás',
    'uploaded' => 'Logok feltöltve a PasteFox-ra',
    'file_uploaded' => 'Fájl feltöltve a PasteFox-ra',
    'upload_failed' => 'Feltöltés sikertelen',
    'api_key_missing' => 'A PasteFox API kulcs nincs beállítva. Add hozzá a bővítmény beállításaiban.',
    'expires_7_days' => '⚠️ API kulcs nélkül a paste 7 nap után lejár',

    // Settings
    'settings_saved' => 'Beállítások mentve',
    'section_api' => 'API konfiguráció',
    'section_api_description' => 'API kulcs nélkül a paste-ek 7 nap után lejárnak és mindig nyilvánosak.',
    'section_paste' => 'Paste beállítások',
    'api_key' => 'API kulcs',
    'api_key_helper' => 'Opcionális – Szerezd be az API kulcsodat a https://pastefox.com/dashboard oldalon',
    'visibility' => 'Láthatóság',
    'visibility_public' => 'Nyilvános',
    'visibility_private' => 'Privát (API kulcs szükséges)',
    'visibility_helper' => 'A privát paste-ekhez API kulcs szükséges',
    'effect' => 'Vizuális effekt',
    'effect_none' => 'Nincs',
    'effect_matrix' => 'Matrix eső',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Konfetti',
    'effect_scratch' => 'Kaparós sorsjegy',
    'effect_puzzle' => 'Puzzle felfedés',
    'effect_slots' => 'Nyerőgép',
    'effect_shake' => 'Rázás',
    'effect_fireworks' => 'Tűzijáték',
    'effect_typewriter' => 'Írógép',
    'effect_blur' => 'Elmosódás felfedés',
    'password' => 'Jelszóvédelem',
    'password_helper' => 'Opcionális – 4-100 karakter',

    // Custom Domain
    'section_custom_domain' => 'Egyéni domain',
    'section_custom_domain_description' => 'Használd a saját domained paste-ek megosztásához. API kulcs szükséges. Domainek kezelése: Vezérlőpult → Egyéni domainek.',
    'custom_domain' => 'Egyéni domain',
    'custom_domain_none' => 'Nincs (pastefox.com használata)',
    'custom_domain_helper' => 'Válassz egy hitelesített domaint a paste URL-ekhez',
    'custom_domain_no_api_key' => 'Egyéni domainekhez API kulcs szükséges',
    'custom_domain_fetch_error' => 'A domainek nem tölthetők be',
    'custom_domain_inactive' => 'inaktív',

    // File sharing
    'file_not_found' => 'Fájl nem található',
    'file_type_not_allowed' => 'Ez a fájltípus nem osztható meg. Csak szöveges fájlok (log, txt, cfg, json, yaml, stb.) támogatottak.',

    // Advanced
    'section_advanced' => 'Speciális beállítások',
    'section_advanced_description' => 'Hibakeresési naplózás és funkció kapcsolók.',
    'file_sharing' => 'Fájlmegosztás',
    'file_sharing_helper' => 'Fájlok megosztásának engedélyezése a szerkesztőből PasteFox-on keresztül.',
    'debug' => 'Hibakeresési naplózás',
    'debug_helper' => 'Minden PasteFox Share művelet naplózása a Laravel naplófájlba hibaelhárításhoz.',
];
