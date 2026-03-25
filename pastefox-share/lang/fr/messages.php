<?php

return [
    'share_logs' => 'Partager les logs',
    'share_file' => 'Partager',
    'uploaded' => 'Logs envoyés sur PasteFox',
    'file_uploaded' => 'Fichier envoyé sur PasteFox',
    'upload_failed' => 'Échec de l\'envoi',
    'api_key_missing' => 'Clé API PasteFox non configurée. Ajoutez-la dans les paramètres du plugin.',
    'expires_7_days' => '⚠️ Sans clé API, le paste expire après 7 jours',

    // Settings
    'settings_saved' => 'Paramètres enregistrés',
    'section_api' => 'Configuration API',
    'section_api_description' => 'Sans clé API, les pastes expirent après 7 jours et sont toujours publics.',
    'section_paste' => 'Paramètres du paste',
    'api_key' => 'Clé API',
    'api_key_helper' => 'Optionnel – Obtenez votre clé API sur https://pastefox.com/dashboard',
    'visibility' => 'Visibilité',
    'visibility_public' => 'Public',
    'visibility_private' => 'Privé (nécessite une clé API)',
    'visibility_helper' => 'Les pastes privés nécessitent une clé API',
    'effect' => 'Effet visuel',
    'effect_none' => 'Aucun',
    'effect_matrix' => 'Pluie Matrix',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Confettis',
    'effect_scratch' => 'Carte à gratter',
    'effect_puzzle' => 'Révélation puzzle',
    'effect_slots' => 'Machine à sous',
    'effect_shake' => 'Secousse',
    'effect_fireworks' => 'Feux d\'artifice',
    'effect_typewriter' => 'Machine à écrire',
    'effect_blur' => 'Révélation floue',
    'password' => 'Protection par mot de passe',
    'password_helper' => 'Optionnel – 4 à 100 caractères',

    // Custom Domain
    'section_custom_domain' => 'Domaine personnalisé',
    'section_custom_domain_description' => 'Utilisez votre propre domaine pour partager des pastes. Nécessite une clé API. Gérez les domaines dans Tableau de bord → Domaines personnalisés.',
    'custom_domain' => 'Domaine personnalisé',
    'custom_domain_none' => 'Aucun (utiliser pastefox.com)',
    'custom_domain_helper' => 'Sélectionnez un domaine vérifié pour les URLs de paste',
    'custom_domain_no_api_key' => 'Clé API requise pour les domaines personnalisés',
    'custom_domain_fetch_error' => 'Impossible de récupérer les domaines',
    'custom_domain_inactive' => 'inactif',

    // File sharing
    'file_not_found' => 'Fichier introuvable',
    'file_type_not_allowed' => 'Ce type de fichier ne peut pas être partagé. Seuls les fichiers texte (log, txt, cfg, json, yaml, etc.) sont pris en charge.',

    // Advanced
    'section_advanced' => 'Paramètres avancés',
    'section_advanced_description' => 'Journalisation de débogage et options de fonctionnalités.',
    'file_sharing' => 'Partage de fichiers',
    'file_sharing_helper' => 'Autoriser le partage de fichiers depuis l\'éditeur via PasteFox.',
    'debug' => 'Journalisation de débogage',
    'debug_helper' => 'Enregistrer toutes les actions PasteFox Share dans le fichier journal Laravel pour le dépannage.',
];
