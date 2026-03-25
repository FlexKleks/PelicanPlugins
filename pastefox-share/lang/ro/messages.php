<?php

return [
    'share_logs' => 'Partajează loguri',
    'share_file' => 'Partajează',
    'uploaded' => 'Logurile au fost încărcate pe PasteFox',
    'file_uploaded' => 'Fișierul a fost încărcat pe PasteFox',
    'upload_failed' => 'Încărcarea a eșuat',
    'api_key_missing' => 'Cheia API PasteFox nu este configurată. Adaugă-o în setările pluginului.',
    'expires_7_days' => '⚠️ Fără cheie API, paste-ul expiră în 7 zile',

    // Settings
    'settings_saved' => 'Setări salvate',
    'section_api' => 'Configurare API',
    'section_api_description' => 'Fără cheie API, paste-urile expiră după 7 zile și sunt întotdeauna publice.',
    'section_paste' => 'Setări paste',
    'api_key' => 'Cheie API',
    'api_key_helper' => 'Opțional – Obține cheia API de la https://pastefox.com/dashboard',
    'visibility' => 'Vizibilitate',
    'visibility_public' => 'Public',
    'visibility_private' => 'Privat (necesită cheie API)',
    'visibility_helper' => 'Paste-urile private necesită o cheie API',
    'effect' => 'Efect vizual',
    'effect_none' => 'Niciunul',
    'effect_matrix' => 'Ploaie Matrix',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Confetti',
    'effect_scratch' => 'Loz în plic',
    'effect_puzzle' => 'Dezvăluire puzzle',
    'effect_slots' => 'Păcănele',
    'effect_shake' => 'Scuturare',
    'effect_fireworks' => 'Artificii',
    'effect_typewriter' => 'Mașină de scris',
    'effect_blur' => 'Dezvăluire blur',
    'password' => 'Protecție cu parolă',
    'password_helper' => 'Opțional – 4-100 caractere',

    // Custom Domain
    'section_custom_domain' => 'Domeniu personalizat',
    'section_custom_domain_description' => 'Folosește propriul domeniu pentru partajarea paste-urilor. Necesită cheie API. Gestionează domeniile în Panou → Domenii personalizate.',
    'custom_domain' => 'Domeniu personalizat',
    'custom_domain_none' => 'Niciunul (folosește pastefox.com)',
    'custom_domain_helper' => 'Selectează un domeniu verificat pentru URL-urile paste',
    'custom_domain_no_api_key' => 'Cheie API necesară pentru domenii personalizate',
    'custom_domain_fetch_error' => 'Domeniile nu au putut fi încărcate',
    'custom_domain_inactive' => 'inactiv',

    // File sharing
    'file_not_found' => 'Fișierul nu a fost găsit',
    'file_type_not_allowed' => 'Acest tip de fișier nu poate fi partajat. Sunt acceptate doar fișiere text (log, txt, cfg, json, yaml, etc.).',

    // Advanced
    'section_advanced' => 'Setări avansate',
    'section_advanced_description' => 'Jurnalizare de depanare și comutatoare de funcții.',
    'file_sharing' => 'Partajare fișiere',
    'file_sharing_helper' => 'Permite partajarea fișierelor din editorul de fișiere prin PasteFox.',
    'debug' => 'Jurnalizare de depanare',
    'debug_helper' => 'Înregistrează toate acțiunile PasteFox Share în fișierul jurnal Laravel pentru depanare.',
];
