<?php

return [
    'share_logs' => '分享日志',
    'share_file' => '分享',
    'uploaded' => '日志已上传至 PasteFox',
    'file_uploaded' => '文件已上传至 PasteFox',
    'upload_failed' => '上传失败',
    'api_key_missing' => 'PasteFox API 密钥未配置。请在插件设置中添加。',
    'expires_7_days' => '⚠️ 没有 API 密钥，粘贴将在 7 天后过期',

    // Settings
    'settings_saved' => '设置已保存',
    'section_api' => 'API 配置',
    'section_api_description' => '没有 API 密钥，粘贴将在 7 天后过期且始终公开。',
    'section_paste' => '粘贴设置',
    'api_key' => 'API 密钥',
    'api_key_helper' => '可选 – 从 https://pastefox.com/dashboard 获取您的 API 密钥',
    'visibility' => '可见性',
    'visibility_public' => '公开',
    'visibility_private' => '私密（需要 API 密钥）',
    'visibility_helper' => '私密粘贴需要 API 密钥',
    'effect' => '视觉效果',
    'effect_none' => '无',
    'effect_matrix' => '矩阵雨',
    'effect_glitch' => '故障效果',
    'effect_confetti' => '彩纸',
    'effect_scratch' => '刮刮卡',
    'effect_puzzle' => '拼图揭示',
    'effect_slots' => '老虎机',
    'effect_shake' => '震动',
    'effect_fireworks' => '烟花',
    'effect_typewriter' => '打字机',
    'effect_blur' => '模糊揭示',
    'password' => '密码保护',
    'password_helper' => '可选 – 4-100 个字符',

    // Custom Domain
    'section_custom_domain' => '自定义域名',
    'section_custom_domain_description' => '使用您自己的域名分享粘贴。需要 API 密钥。在仪表板 → 自定义域名中管理域名。',
    'custom_domain' => '自定义域名',
    'custom_domain_none' => '无（使用 pastefox.com）',
    'custom_domain_helper' => '选择一个已验证的域名用于粘贴 URL',
    'custom_domain_no_api_key' => '自定义域名需要 API 密钥',
    'custom_domain_fetch_error' => '无法获取域名',
    'custom_domain_inactive' => '未激活',

    // File sharing
    'file_not_found' => '文件未找到',
    'file_type_not_allowed' => '此文件类型无法共享。仅支持文本文件（log、txt、cfg、json、yaml 等）。',

    // Advanced
    'section_advanced' => '高级设置',
    'section_advanced_description' => '调试日志和功能开关。',
    'file_sharing' => '文件共享',
    'file_sharing_helper' => '允许通过 PasteFox 从文件编辑器共享文件。',
    'debug' => '调试日志',
    'debug_helper' => '将所有 PasteFox Share 操作记录到 Laravel 日志文件中以便排查问题。',
];
