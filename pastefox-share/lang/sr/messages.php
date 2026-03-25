<?php

return [
    'share_logs' => 'Подели логове',
    'share_file' => 'Подели',
    'uploaded' => 'Логови отпремљени на PasteFox',
    'file_uploaded' => 'Фајл отпремљен на PasteFox',
    'upload_failed' => 'Отпремање неуспешно',
    'api_key_missing' => 'PasteFox API кључ није подешен. Додајте га у подешавањима додатка.',
    'expires_7_days' => '⚠️ Без API кључа paste истиче за 7 дана',

    // Settings
    'settings_saved' => 'Подешавања сачувана',
    'section_api' => 'API конфигурација',
    'section_api_description' => 'Без API кључа paste-ови истичу после 7 дана и увек су јавни.',
    'section_paste' => 'Подешавања paste',
    'api_key' => 'API кључ',
    'api_key_helper' => 'Опционално – Преузмите API кључ са https://pastefox.com/dashboard',
    'visibility' => 'Видљивост',
    'visibility_public' => 'Јавно',
    'visibility_private' => 'Приватно (захтева API кључ)',
    'visibility_helper' => 'Приватни paste-ови захтевају API кључ',
    'effect' => 'Визуелни ефекат',
    'effect_none' => 'Без',
    'effect_matrix' => 'Matrix киша',
    'effect_glitch' => 'Глич',
    'effect_confetti' => 'Конфети',
    'effect_scratch' => 'Гребалица',
    'effect_puzzle' => 'Откривање слагалице',
    'effect_slots' => 'Слот машина',
    'effect_shake' => 'Тресење',
    'effect_fireworks' => 'Ватромет',
    'effect_typewriter' => 'Писаћа машина',
    'effect_blur' => 'Откривање замућења',
    'password' => 'Заштита лозинком',
    'password_helper' => 'Опционално – 4-100 карактера',

    // Custom Domain
    'section_custom_domain' => 'Прилагођени домен',
    'section_custom_domain_description' => 'Користите свој домен за дељење paste-ова. Захтева API кључ. Управљајте доменима у Контролна табла → Прилагођени домени.',
    'custom_domain' => 'Прилагођени домен',
    'custom_domain_none' => 'Без (користи pastefox.com)',
    'custom_domain_helper' => 'Изаберите верификовани домен за URL адресе paste',
    'custom_domain_no_api_key' => 'API кључ је потребан за прилагођене домене',
    'custom_domain_fetch_error' => 'Домени нису могли бити учитани',
    'custom_domain_inactive' => 'неактиван',

    // File sharing
    'file_not_found' => 'Фајл није пронађен',
    'file_type_not_allowed' => 'Овај тип фајла не може бити подељен. Подржани су само текстуални фајлови (log, txt, cfg, json, yaml итд.).',

    // Advanced
    'section_advanced' => 'Напредна подешавања',
    'section_advanced_description' => 'Дебаг логовање и прекидачи функција.',
    'file_sharing' => 'Дељење фајлова',
    'file_sharing_helper' => 'Дозволи дељење фајлова из едитора преко PasteFox.',
    'debug' => 'Дебаг логовање',
    'debug_helper' => 'Записуј све PasteFox Share акције у Laravel лог фајл ради решавања проблема.',
];
