<?php

return [
    'share_logs' => 'Udostępnij logi',
    'share_file' => 'Udostępnij',
    'uploaded' => 'Logi przesłane na PasteFox',
    'file_uploaded' => 'Plik przesłany na PasteFox',
    'upload_failed' => 'Przesyłanie nie powiodło się',
    'api_key_missing' => 'Klucz API PasteFox nie jest skonfigurowany. Dodaj go w ustawieniach wtyczki.',
    'expires_7_days' => '⚠️ Bez klucza API paste wygasa po 7 dniach',

    // Settings
    'settings_saved' => 'Ustawienia zapisane',
    'section_api' => 'Konfiguracja API',
    'section_api_description' => 'Bez klucza API pasty wygasają po 7 dniach i są zawsze publiczne.',
    'section_paste' => 'Ustawienia paste',
    'api_key' => 'Klucz API',
    'api_key_helper' => 'Opcjonalnie – Pobierz klucz API z https://pastefox.com/dashboard',
    'visibility' => 'Widoczność',
    'visibility_public' => 'Publiczny',
    'visibility_private' => 'Prywatny (wymaga klucza API)',
    'visibility_helper' => 'Prywatne pasty wymagają klucza API',
    'effect' => 'Efekt wizualny',
    'effect_none' => 'Brak',
    'effect_matrix' => 'Deszcz Matrix',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Konfetti',
    'effect_scratch' => 'Zdrapka',
    'effect_puzzle' => 'Odsłonięcie puzzli',
    'effect_slots' => 'Automat do gier',
    'effect_shake' => 'Wstrząs',
    'effect_fireworks' => 'Fajerwerki',
    'effect_typewriter' => 'Maszyna do pisania',
    'effect_blur' => 'Odsłonięcie rozmycia',
    'password' => 'Ochrona hasłem',
    'password_helper' => 'Opcjonalnie – 4-100 znaków',

    // Custom Domain
    'section_custom_domain' => 'Własna domena',
    'section_custom_domain_description' => 'Użyj własnej domeny do udostępniania pastów. Wymaga klucza API. Zarządzaj domenami w Panel → Własne domeny.',
    'custom_domain' => 'Własna domena',
    'custom_domain_none' => 'Brak (użyj pastefox.com)',
    'custom_domain_helper' => 'Wybierz zweryfikowaną domenę dla adresów URL paste',
    'custom_domain_no_api_key' => 'Klucz API wymagany dla własnych domen',
    'custom_domain_fetch_error' => 'Nie udało się pobrać domen',
    'custom_domain_inactive' => 'nieaktywna',

    // File sharing
    'file_not_found' => 'Plik nie znaleziony',
    'file_type_not_allowed' => 'Ten typ pliku nie może być udostępniony. Obsługiwane są tylko pliki tekstowe (log, txt, cfg, json, yaml, itp.).',

    // Advanced
    'section_advanced' => 'Ustawienia zaawansowane',
    'section_advanced_description' => 'Logowanie debugowania i przełączniki funkcji.',
    'file_sharing' => 'Udostępnianie plików',
    'file_sharing_helper' => 'Zezwól na udostępnianie plików z edytora przez PasteFox.',
    'debug' => 'Logowanie debugowania',
    'debug_helper' => 'Zapisuj wszystkie akcje PasteFox Share do pliku logów Laravel w celu rozwiązywania problemów.',
];
