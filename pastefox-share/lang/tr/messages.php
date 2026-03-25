<?php

return [
    'share_logs' => 'Logları paylaş',
    'share_file' => 'Paylaş',
    'uploaded' => 'Loglar PasteFox\'a yüklendi',
    'file_uploaded' => 'Dosya PasteFox\'a yüklendi',
    'upload_failed' => 'Yükleme başarısız',
    'api_key_missing' => 'PasteFox API anahtarı yapılandırılmamış. Eklenti ayarlarından ekleyin.',
    'expires_7_days' => '⚠️ API anahtarı olmadan paste 7 gün sonra sona erer',

    // Settings
    'settings_saved' => 'Ayarlar kaydedildi',
    'section_api' => 'API Yapılandırması',
    'section_api_description' => 'API anahtarı olmadan paste\'ler 7 gün sonra sona erer ve her zaman herkese açıktır.',
    'section_paste' => 'Paste Ayarları',
    'api_key' => 'API Anahtarı',
    'api_key_helper' => 'İsteğe bağlı – API anahtarınızı https://pastefox.com/dashboard adresinden alın',
    'visibility' => 'Görünürlük',
    'visibility_public' => 'Herkese açık',
    'visibility_private' => 'Özel (API anahtarı gerektirir)',
    'visibility_helper' => 'Özel paste\'ler API anahtarı gerektirir',
    'effect' => 'Görsel efekt',
    'effect_none' => 'Yok',
    'effect_matrix' => 'Matrix Yağmuru',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Konfeti',
    'effect_scratch' => 'Kazı kazan',
    'effect_puzzle' => 'Bulmaca açılışı',
    'effect_slots' => 'Slot makinesi',
    'effect_shake' => 'Sallama',
    'effect_fireworks' => 'Havai fişek',
    'effect_typewriter' => 'Daktilo',
    'effect_blur' => 'Bulanıklık açılışı',
    'password' => 'Şifre koruması',
    'password_helper' => 'İsteğe bağlı – 4-100 karakter',

    // Custom Domain
    'section_custom_domain' => 'Özel alan adı',
    'section_custom_domain_description' => 'Paste paylaşımı için kendi alan adınızı kullanın. API anahtarı gerektirir. Alan adlarını Kontrol Paneli → Özel Alan Adları bölümünden yönetin.',
    'custom_domain' => 'Özel alan adı',
    'custom_domain_none' => 'Yok (pastefox.com kullan)',
    'custom_domain_helper' => 'Paste URL\'leri için doğrulanmış bir alan adı seçin',
    'custom_domain_no_api_key' => 'Özel alan adları için API anahtarı gereklidir',
    'custom_domain_fetch_error' => 'Alan adları alınamadı',
    'custom_domain_inactive' => 'etkin değil',

    // File sharing
    'file_not_found' => 'Dosya bulunamadı',
    'file_type_not_allowed' => 'Bu dosya türü paylaşılamaz. Yalnızca metin tabanlı dosyalar (log, txt, cfg, json, yaml, vb.) desteklenir.',

    // Advanced
    'section_advanced' => 'Gelişmiş Ayarlar',
    'section_advanced_description' => 'Hata ayıklama günlüğü ve özellik seçenekleri.',
    'file_sharing' => 'Dosya Paylaşımı',
    'file_sharing_helper' => 'Dosya düzenleyicisinden PasteFox üzerinden dosya paylaşımına izin ver.',
    'debug' => 'Hata Ayıklama Günlüğü',
    'debug_helper' => 'Sorun giderme için tüm PasteFox Share eylemlerini Laravel günlük dosyasına kaydet.',
];
