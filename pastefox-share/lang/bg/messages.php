<?php

return [
    'share_logs' => 'Споделяне на логове',
    'share_file' => 'Споделяне',
    'uploaded' => 'Логовете са качени в PasteFox',
    'file_uploaded' => 'Файлът е качен в PasteFox',
    'upload_failed' => 'Качването е неуспешно',
    'api_key_missing' => 'API ключът на PasteFox не е конфигуриран. Добавете го в настройките на плъгина.',
    'expires_7_days' => '⚠️ Без API ключ paste изтича след 7 дни',

    // Settings
    'settings_saved' => 'Настройките са запазени',
    'section_api' => 'API конфигурация',
    'section_api_description' => 'Без API ключ paste-овете изтичат след 7 дни и винаги са публични.',
    'section_paste' => 'Настройки на paste',
    'api_key' => 'API ключ',
    'api_key_helper' => 'По избор – Вземете API ключа си от https://pastefox.com/dashboard',
    'visibility' => 'Видимост',
    'visibility_public' => 'Публичен',
    'visibility_private' => 'Частен (изисква API ключ)',
    'visibility_helper' => 'Частните paste-ове изискват API ключ',
    'effect' => 'Визуален ефект',
    'effect_none' => 'Няма',
    'effect_matrix' => 'Matrix дъжд',
    'effect_glitch' => 'Глич',
    'effect_confetti' => 'Конфети',
    'effect_scratch' => 'Скреч карта',
    'effect_puzzle' => 'Пъзел разкриване',
    'effect_slots' => 'Слот машина',
    'effect_shake' => 'Разтърсване',
    'effect_fireworks' => 'Фойерверки',
    'effect_typewriter' => 'Пишеща машина',
    'effect_blur' => 'Размазано разкриване',
    'password' => 'Защита с парола',
    'password_helper' => 'По избор – 4-100 символа',

    // Custom Domain
    'section_custom_domain' => 'Собствен домейн',
    'section_custom_domain_description' => 'Използвайте собствен домейн за споделяне на paste-ове. Изисква API ключ. Управлявайте домейни в Табло → Собствени домейни.',
    'custom_domain' => 'Собствен домейн',
    'custom_domain_none' => 'Няма (използвай pastefox.com)',
    'custom_domain_helper' => 'Изберете верифициран домейн за URL адреси на paste',
    'custom_domain_no_api_key' => 'API ключ е необходим за собствени домейни',
    'custom_domain_fetch_error' => 'Домейните не можаха да бъдат заредени',
    'custom_domain_inactive' => 'неактивен',

    // File sharing
    'file_not_found' => 'Файлът не е намерен',
    'file_type_not_allowed' => 'Този тип файл не може да бъде споделен. Поддържат се само текстови файлове (log, txt, cfg, json, yaml и др.).',

    // Advanced
    'section_advanced' => 'Разширени настройки',
    'section_advanced_description' => 'Дебъг логване и превключватели на функции.',
    'file_sharing' => 'Споделяне на файлове',
    'file_sharing_helper' => 'Разрешаване на споделяне на файлове от редактора чрез PasteFox.',
    'debug' => 'Дебъг логване',
    'debug_helper' => 'Записване на всички действия на PasteFox Share в лог файла на Laravel за отстраняване на проблеми.',
];
