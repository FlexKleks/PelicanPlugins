<?php

return [
    'share_logs' => 'Condividi log',
    'share_file' => 'Condividi',
    'uploaded' => 'Log caricati su PasteFox',
    'file_uploaded' => 'File caricato su PasteFox',
    'upload_failed' => 'Caricamento fallito',
    'api_key_missing' => 'Chiave API PasteFox non configurata. Aggiungila nelle impostazioni del plugin.',
    'expires_7_days' => '⚠️ Senza chiave API, il paste scade dopo 7 giorni',

    // Settings
    'settings_saved' => 'Impostazioni salvate',
    'section_api' => 'Configurazione API',
    'section_api_description' => 'Senza chiave API, i paste scadono dopo 7 giorni e sono sempre pubblici.',
    'section_paste' => 'Impostazioni paste',
    'api_key' => 'Chiave API',
    'api_key_helper' => 'Opzionale – Ottieni la tua chiave API su https://pastefox.com/dashboard',
    'visibility' => 'Visibilità',
    'visibility_public' => 'Pubblico',
    'visibility_private' => 'Privato (richiede chiave API)',
    'visibility_helper' => 'I paste privati richiedono una chiave API',
    'effect' => 'Effetto visivo',
    'effect_none' => 'Nessuno',
    'effect_matrix' => 'Pioggia Matrix',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Coriandoli',
    'effect_scratch' => 'Gratta e vinci',
    'effect_puzzle' => 'Rivelazione puzzle',
    'effect_slots' => 'Slot machine',
    'effect_shake' => 'Scuotimento',
    'effect_fireworks' => 'Fuochi d\'artificio',
    'effect_typewriter' => 'Macchina da scrivere',
    'effect_blur' => 'Rivelazione sfocata',
    'password' => 'Protezione con password',
    'password_helper' => 'Opzionale – da 4 a 100 caratteri',

    // Custom Domain
    'section_custom_domain' => 'Dominio personalizzato',
    'section_custom_domain_description' => 'Usa il tuo dominio per condividere paste. Richiede chiave API. Gestisci i domini in Pannello → Domini personalizzati.',
    'custom_domain' => 'Dominio personalizzato',
    'custom_domain_none' => 'Nessuno (usa pastefox.com)',
    'custom_domain_helper' => 'Seleziona un dominio verificato per gli URL dei paste',
    'custom_domain_no_api_key' => 'Chiave API necessaria per domini personalizzati',
    'custom_domain_fetch_error' => 'Impossibile recuperare i domini',
    'custom_domain_inactive' => 'inattivo',

    // File sharing
    'file_not_found' => 'File non trovato',
    'file_type_not_allowed' => 'Questo tipo di file non può essere condiviso. Sono supportati solo file di testo (log, txt, cfg, json, yaml, ecc.).',

    // Advanced
    'section_advanced' => 'Impostazioni avanzate',
    'section_advanced_description' => 'Registrazione debug e opzioni funzionalità.',
    'file_sharing' => 'Condivisione file',
    'file_sharing_helper' => 'Consenti la condivisione di file dall\'editor tramite PasteFox.',
    'debug' => 'Registrazione debug',
    'debug_helper' => 'Registra tutte le azioni PasteFox Share nel file di log Laravel per la risoluzione dei problemi.',
];
