<?php

return [
    'share_logs' => 'مشاركة السجلات',
    'share_file' => 'مشاركة',
    'uploaded' => 'تم رفع السجلات إلى PasteFox',
    'file_uploaded' => 'تم رفع الملف إلى PasteFox',
    'upload_failed' => 'فشل الرفع',
    'api_key_missing' => 'مفتاح API الخاص بـ PasteFox غير مُعدّ. أضفه في إعدادات الإضافة.',
    'expires_7_days' => '⚠️ بدون مفتاح API، تنتهي صلاحية اللصق بعد 7 أيام',

    // Settings
    'settings_saved' => 'تم حفظ الإعدادات',
    'section_api' => 'إعدادات API',
    'section_api_description' => 'بدون مفتاح API، تنتهي صلاحية اللصقات بعد 7 أيام وتكون دائمًا عامة.',
    'section_paste' => 'إعدادات اللصق',
    'api_key' => 'مفتاح API',
    'api_key_helper' => 'اختياري – احصل على مفتاح API من https://pastefox.com/dashboard',
    'visibility' => 'الرؤية',
    'visibility_public' => 'عام',
    'visibility_private' => 'خاص (يتطلب مفتاح API)',
    'visibility_helper' => 'اللصقات الخاصة تتطلب مفتاح API',
    'effect' => 'تأثير بصري',
    'effect_none' => 'بدون',
    'effect_matrix' => 'مطر ماتريكس',
    'effect_glitch' => 'خلل',
    'effect_confetti' => 'قصاصات ورق',
    'effect_scratch' => 'بطاقة حك',
    'effect_puzzle' => 'كشف اللغز',
    'effect_slots' => 'ماكينة قمار',
    'effect_shake' => 'اهتزاز',
    'effect_fireworks' => 'ألعاب نارية',
    'effect_typewriter' => 'آلة كاتبة',
    'effect_blur' => 'كشف ضبابي',
    'password' => 'حماية بكلمة مرور',
    'password_helper' => 'اختياري – 4-100 حرف',

    // Custom Domain
    'section_custom_domain' => 'نطاق مخصص',
    'section_custom_domain_description' => 'استخدم نطاقك الخاص لمشاركة اللصقات. يتطلب مفتاح API. إدارة النطاقات في لوحة التحكم → النطاقات المخصصة.',
    'custom_domain' => 'نطاق مخصص',
    'custom_domain_none' => 'بدون (استخدام pastefox.com)',
    'custom_domain_helper' => 'اختر نطاقًا موثقًا لروابط اللصق',
    'custom_domain_no_api_key' => 'مفتاح API مطلوب للنطاقات المخصصة',
    'custom_domain_fetch_error' => 'تعذر جلب النطاقات',
    'custom_domain_inactive' => 'غير نشط',

    // File sharing
    'file_not_found' => 'الملف غير موجود',
    'file_type_not_allowed' => 'لا يمكن مشاركة هذا النوع من الملفات. يتم دعم الملفات النصية فقط (log، txt، cfg، json، yaml، إلخ).',

    // Advanced
    'section_advanced' => 'إعدادات متقدمة',
    'section_advanced_description' => 'تسجيل التصحيح ومفاتيح الميزات.',
    'file_sharing' => 'مشاركة الملفات',
    'file_sharing_helper' => 'السماح بمشاركة الملفات من محرر الملفات عبر PasteFox.',
    'debug' => 'تسجيل التصحيح',
    'debug_helper' => 'تسجيل جميع إجراءات PasteFox Share في ملف سجل Laravel لاستكشاف الأخطاء وإصلاحها.',
];
