<?php

return [
    'share_logs' => 'Поделиться логами',
    'share_file' => 'Поделиться',
    'uploaded' => 'Логи загружены на PasteFox',
    'file_uploaded' => 'Файл загружен на PasteFox',
    'upload_failed' => 'Ошибка загрузки',
    'api_key_missing' => 'API-ключ PasteFox не настроен. Добавьте его в настройках плагина.',
    'expires_7_days' => '⚠️ Без API-ключа paste истекает через 7 дней',

    // Settings
    'settings_saved' => 'Настройки сохранены',
    'section_api' => 'Настройка API',
    'section_api_description' => 'Без API-ключа pastes истекают через 7 дней и всегда публичны.',
    'section_paste' => 'Настройки paste',
    'api_key' => 'API-ключ',
    'api_key_helper' => 'Необязательно – Получите API-ключ на https://pastefox.com/dashboard',
    'visibility' => 'Видимость',
    'visibility_public' => 'Публичный',
    'visibility_private' => 'Приватный (требуется API-ключ)',
    'visibility_helper' => 'Приватные pastes требуют API-ключ',
    'effect' => 'Визуальный эффект',
    'effect_none' => 'Нет',
    'effect_matrix' => 'Дождь Matrix',
    'effect_glitch' => 'Глитч',
    'effect_confetti' => 'Конфетти',
    'effect_scratch' => 'Скретч-карта',
    'effect_puzzle' => 'Раскрытие пазла',
    'effect_slots' => 'Игровой автомат',
    'effect_shake' => 'Тряска',
    'effect_fireworks' => 'Фейерверк',
    'effect_typewriter' => 'Печатная машинка',
    'effect_blur' => 'Раскрытие размытия',
    'password' => 'Защита паролем',
    'password_helper' => 'Необязательно – от 4 до 100 символов',

    // Custom Domain
    'section_custom_domain' => 'Свой домен',
    'section_custom_domain_description' => 'Используйте свой домен для обмена pastes. Требуется API-ключ. Управляйте доменами в Панель → Свои домены.',
    'custom_domain' => 'Свой домен',
    'custom_domain_none' => 'Нет (использовать pastefox.com)',
    'custom_domain_helper' => 'Выберите подтверждённый домен для URL paste',
    'custom_domain_no_api_key' => 'Для своих доменов требуется API-ключ',
    'custom_domain_fetch_error' => 'Не удалось получить домены',
    'custom_domain_inactive' => 'неактивен',

    // File sharing
    'file_not_found' => 'Файл не найден',
    'file_type_not_allowed' => 'Этот тип файла нельзя поделиться. Поддерживаются только текстовые файлы (log, txt, cfg, json, yaml и т.д.).',

    // Advanced
    'section_advanced' => 'Расширенные настройки',
    'section_advanced_description' => 'Отладочное логирование и переключатели функций.',
    'file_sharing' => 'Обмен файлами',
    'file_sharing_helper' => 'Разрешить обмен файлами из редактора через PasteFox.',
    'debug' => 'Отладочное логирование',
    'debug_helper' => 'Записывать все действия PasteFox Share в лог-файл Laravel для устранения неполадок.',
];
