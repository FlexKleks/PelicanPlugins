<?php

return [
    'api_key' => env('PASTEFOX_API_KEY'),
    'visibility' => env('PASTEFOX_VISIBILITY', 'PUBLIC'),
    'effect' => env('PASTEFOX_EFFECT', 'NONE'),
    'password' => env('PASTEFOX_PASSWORD'),
    'custom_domain' => env('PASTEFOX_CUSTOM_DOMAIN'),
    'debug' => env('PASTEFOX_DEBUG', false),
    'file_sharing' => env('PASTEFOX_FILE_SHARING', true),
];
