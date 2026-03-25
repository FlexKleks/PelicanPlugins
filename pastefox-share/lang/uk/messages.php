<?php

return [
    'share_logs' => 'Поділитися логами',
    'share_file' => 'Поділитися',
    'uploaded' => 'Логи завантажено на PasteFox',
    'file_uploaded' => 'Файл завантажено на PasteFox',
    'upload_failed' => 'Помилка завантаження',
    'api_key_missing' => 'API-ключ PasteFox не налаштовано. Додайте його в налаштуваннях плагіна.',
    'expires_7_days' => '⚠️ Без API-ключа paste закінчується через 7 днів',

    // Settings
    'settings_saved' => 'Налаштування збережено',
    'section_api' => 'Налаштування API',
    'section_api_description' => 'Без API-ключа pastes закінчуються через 7 днів і завжди публічні.',
    'section_paste' => 'Налаштування paste',
    'api_key' => 'API-ключ',
    'api_key_helper' => 'Необов\'язково – Отримайте API-ключ на https://pastefox.com/dashboard',
    'visibility' => 'Видимість',
    'visibility_public' => 'Публічний',
    'visibility_private' => 'Приватний (потрібен API-ключ)',
    'visibility_helper' => 'Приватні pastes потребують API-ключ',
    'effect' => 'Візуальний ефект',
    'effect_none' => 'Немає',
    'effect_matrix' => 'Дощ Matrix',
    'effect_glitch' => 'Гліч',
    'effect_confetti' => 'Конфеті',
    'effect_scratch' => 'Скретч-картка',
    'effect_puzzle' => 'Розкриття пазла',
    'effect_slots' => 'Ігровий автомат',
    'effect_shake' => 'Тряска',
    'effect_fireworks' => 'Феєрверк',
    'effect_typewriter' => 'Друкарська машинка',
    'effect_blur' => 'Розкриття розмиття',
    'password' => 'Захист паролем',
    'password_helper' => 'Необов\'язково – від 4 до 100 символів',

    // Custom Domain
    'section_custom_domain' => 'Власний домен',
    'section_custom_domain_description' => 'Використовуйте власний домен для обміну pastes. Потрібен API-ключ. Керуйте доменами в Панель → Власні домени.',
    'custom_domain' => 'Власний домен',
    'custom_domain_none' => 'Немає (використовувати pastefox.com)',
    'custom_domain_helper' => 'Оберіть підтверджений домен для URL paste',
    'custom_domain_no_api_key' => 'Для власних доменів потрібен API-ключ',
    'custom_domain_fetch_error' => 'Не вдалося отримати домени',
    'custom_domain_inactive' => 'неактивний',

    // File sharing
    'file_not_found' => 'Файл не знайдено',
    'file_type_not_allowed' => 'Цей тип файлу не можна поділитися. Підтримуються лише текстові файли (log, txt, cfg, json, yaml тощо).',

    // Advanced
    'section_advanced' => 'Розширені налаштування',
    'section_advanced_description' => 'Налагоджувальне логування та перемикачі функцій.',
    'file_sharing' => 'Обмін файлами',
    'file_sharing_helper' => 'Дозволити обмін файлами з редактора через PasteFox.',
    'debug' => 'Налагоджувальне логування',
    'debug_helper' => 'Записувати всі дії PasteFox Share у лог-файл Laravel для усунення неполадок.',
];
