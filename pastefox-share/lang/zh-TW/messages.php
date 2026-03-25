<?php

return [
    'share_logs' => '分享日誌',
    'share_file' => '分享',
    'uploaded' => '日誌已上傳至 PasteFox',
    'file_uploaded' => '檔案已上傳至 PasteFox',
    'upload_failed' => '上傳失敗',
    'api_key_missing' => 'PasteFox API 金鑰未設定。請在外掛設定中新增。',
    'expires_7_days' => '⚠️ 沒有 API 金鑰，貼上將在 7 天後過期',

    // Settings
    'settings_saved' => '設定已儲存',
    'section_api' => 'API 設定',
    'section_api_description' => '沒有 API 金鑰，貼上將在 7 天後過期且始終公開。',
    'section_paste' => '貼上設定',
    'api_key' => 'API 金鑰',
    'api_key_helper' => '選填 – 從 https://pastefox.com/dashboard 取得您的 API 金鑰',
    'visibility' => '可見性',
    'visibility_public' => '公開',
    'visibility_private' => '私密（需要 API 金鑰）',
    'visibility_helper' => '私密貼上需要 API 金鑰',
    'effect' => '視覺效果',
    'effect_none' => '無',
    'effect_matrix' => '矩陣雨',
    'effect_glitch' => '故障效果',
    'effect_confetti' => '彩紙',
    'effect_scratch' => '刮刮卡',
    'effect_puzzle' => '拼圖揭示',
    'effect_slots' => '拉霸機',
    'effect_shake' => '震動',
    'effect_fireworks' => '煙火',
    'effect_typewriter' => '打字機',
    'effect_blur' => '模糊揭示',
    'password' => '密碼保護',
    'password_helper' => '選填 – 4-100 個字元',

    // Custom Domain
    'section_custom_domain' => '自訂網域',
    'section_custom_domain_description' => '使用您自己的網域分享貼上。需要 API 金鑰。在儀表板 → 自訂網域中管理網域。',
    'custom_domain' => '自訂網域',
    'custom_domain_none' => '無（使用 pastefox.com）',
    'custom_domain_helper' => '選擇一個已驗證的網域用於貼上 URL',
    'custom_domain_no_api_key' => '自訂網域需要 API 金鑰',
    'custom_domain_fetch_error' => '無法取得網域',
    'custom_domain_inactive' => '未啟用',

    // File sharing
    'file_not_found' => '檔案未找到',
    'file_type_not_allowed' => '此檔案類型無法共享。僅支援文字檔案（log、txt、cfg、json、yaml 等）。',

    // Advanced
    'section_advanced' => '進階設定',
    'section_advanced_description' => '除錯日誌和功能開關。',
    'file_sharing' => '檔案共享',
    'file_sharing_helper' => '允許透過 PasteFox 從檔案編輯器共享檔案。',
    'debug' => '除錯日誌',
    'debug_helper' => '將所有 PasteFox Share 操作記錄到 Laravel 日誌檔案中以便排查問題。',
];
