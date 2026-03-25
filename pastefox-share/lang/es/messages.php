<?php

return [
    'share_logs' => 'Compartir logs',
    'share_file' => 'Compartir',
    'uploaded' => 'Logs subidos a PasteFox',
    'file_uploaded' => 'Archivo subido a PasteFox',
    'upload_failed' => 'Error al subir',
    'api_key_missing' => 'Clave API de PasteFox no configurada. Añádela en los ajustes del plugin.',
    'expires_7_days' => '⚠️ Sin clave API, el paste expira en 7 días',

    // Settings
    'settings_saved' => 'Ajustes guardados',
    'section_api' => 'Configuración de API',
    'section_api_description' => 'Sin clave API, los pastes expiran después de 7 días y siempre son públicos.',
    'section_paste' => 'Ajustes del paste',
    'api_key' => 'Clave API',
    'api_key_helper' => 'Opcional – Obtén tu clave API en https://pastefox.com/dashboard',
    'visibility' => 'Visibilidad',
    'visibility_public' => 'Público',
    'visibility_private' => 'Privado (requiere clave API)',
    'visibility_helper' => 'Los pastes privados requieren una clave API',
    'effect' => 'Efecto visual',
    'effect_none' => 'Ninguno',
    'effect_matrix' => 'Lluvia Matrix',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Confeti',
    'effect_scratch' => 'Tarjeta rasca',
    'effect_puzzle' => 'Revelación puzzle',
    'effect_slots' => 'Máquina tragaperras',
    'effect_shake' => 'Sacudida',
    'effect_fireworks' => 'Fuegos artificiales',
    'effect_typewriter' => 'Máquina de escribir',
    'effect_blur' => 'Revelación borrosa',
    'password' => 'Protección con contraseña',
    'password_helper' => 'Opcional – 4 a 100 caracteres',

    // Custom Domain
    'section_custom_domain' => 'Dominio personalizado',
    'section_custom_domain_description' => 'Usa tu propio dominio para compartir pastes. Requiere clave API. Gestiona dominios en Panel → Dominios personalizados.',
    'custom_domain' => 'Dominio personalizado',
    'custom_domain_none' => 'Ninguno (usar pastefox.com)',
    'custom_domain_helper' => 'Selecciona un dominio verificado para las URLs de paste',
    'custom_domain_no_api_key' => 'Se requiere clave API para dominios personalizados',
    'custom_domain_fetch_error' => 'No se pudieron obtener los dominios',
    'custom_domain_inactive' => 'inactivo',

    // File sharing
    'file_not_found' => 'Archivo no encontrado',
    'file_type_not_allowed' => 'Este tipo de archivo no se puede compartir. Solo se admiten archivos de texto (log, txt, cfg, json, yaml, etc.).',

    // Advanced
    'section_advanced' => 'Ajustes avanzados',
    'section_advanced_description' => 'Registro de depuración y opciones de funcionalidades.',
    'file_sharing' => 'Compartir archivos',
    'file_sharing_helper' => 'Permitir compartir archivos desde el editor de archivos a través de PasteFox.',
    'debug' => 'Registro de depuración',
    'debug_helper' => 'Registrar todas las acciones de PasteFox Share en el archivo de registro de Laravel para solución de problemas.',
];
