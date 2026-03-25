<?php

return [
    'share_logs' => 'Jaa lokit',
    'share_file' => 'Jaa',
    'uploaded' => 'Lokit ladattu PasteFoxiin',
    'file_uploaded' => 'Tiedosto ladattu PasteFoxiin',
    'upload_failed' => 'Lataus epäonnistui',
    'api_key_missing' => 'PasteFox API-avain ei ole määritetty. Lisää se lisäosan asetuksissa.',
    'expires_7_days' => '⚠️ Ilman API-avainta paste vanhenee 7 päivässä',

    // Settings
    'settings_saved' => 'Asetukset tallennettu',
    'section_api' => 'API-asetukset',
    'section_api_description' => 'Ilman API-avainta pastet vanhenevat 7 päivän jälkeen ja ovat aina julkisia.',
    'section_paste' => 'Paste-asetukset',
    'api_key' => 'API-avain',
    'api_key_helper' => 'Valinnainen – Hanki API-avaimesi osoitteesta https://pastefox.com/dashboard',
    'visibility' => 'Näkyvyys',
    'visibility_public' => 'Julkinen',
    'visibility_private' => 'Yksityinen (vaatii API-avaimen)',
    'visibility_helper' => 'Yksityiset pastet vaativat API-avaimen',
    'effect' => 'Visuaalinen tehoste',
    'effect_none' => 'Ei mitään',
    'effect_matrix' => 'Matrix-sade',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Konfetti',
    'effect_scratch' => 'Raaputusarpa',
    'effect_puzzle' => 'Palapelin paljastus',
    'effect_slots' => 'Hedelmäpeli',
    'effect_shake' => 'Tärinä',
    'effect_fireworks' => 'Ilotulitus',
    'effect_typewriter' => 'Kirjoituskone',
    'effect_blur' => 'Sumennuksen paljastus',
    'password' => 'Salasanasuojaus',
    'password_helper' => 'Valinnainen – 4-100 merkkiä',

    // Custom Domain
    'section_custom_domain' => 'Oma verkkotunnus',
    'section_custom_domain_description' => 'Käytä omaa verkkotunnustasi pastien jakamiseen. Vaatii API-avaimen. Hallitse verkkotunnuksia kohdassa Hallintapaneeli → Omat verkkotunnukset.',
    'custom_domain' => 'Oma verkkotunnus',
    'custom_domain_none' => 'Ei mitään (käytä pastefox.com)',
    'custom_domain_helper' => 'Valitse vahvistettu verkkotunnus paste-URL-osoitteille',
    'custom_domain_no_api_key' => 'API-avain vaaditaan omille verkkotunnuksille',
    'custom_domain_fetch_error' => 'Verkkotunnuksia ei voitu hakea',
    'custom_domain_inactive' => 'ei käytössä',

    // File sharing
    'file_not_found' => 'Tiedostoa ei löytynyt',
    'file_type_not_allowed' => 'Tätä tiedostotyyppiä ei voi jakaa. Vain tekstipohjaiset tiedostot (log, txt, cfg, json, yaml, jne.) ovat tuettuja.',

    // Advanced
    'section_advanced' => 'Lisäasetukset',
    'section_advanced_description' => 'Virheenkorjauslokit ja ominaisuuskytkimet.',
    'file_sharing' => 'Tiedostojen jakaminen',
    'file_sharing_helper' => 'Salli tiedostojen jakaminen tiedostoeditorista PasteFoxin kautta.',
    'debug' => 'Virheenkorjausloki',
    'debug_helper' => 'Kirjaa kaikki PasteFox Share -toiminnot Laravelin lokitiedostoon vianmääritystä varten.',
];
