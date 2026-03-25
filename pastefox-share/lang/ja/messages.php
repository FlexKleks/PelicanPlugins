<?php

return [
    'share_logs' => 'ログを共有',
    'share_file' => '共有',
    'uploaded' => 'ログがPasteFoxにアップロードされました',
    'file_uploaded' => 'ファイルがPasteFoxにアップロードされました',
    'upload_failed' => 'アップロードに失敗しました',
    'api_key_missing' => 'PasteFox APIキーが設定されていません。プラグイン設定で追加してください。',
    'expires_7_days' => '⚠️ APIキーなしの場合、ペーストは7日後に期限切れになります',

    // Settings
    'settings_saved' => '設定が保存されました',
    'section_api' => 'API設定',
    'section_api_description' => 'APIキーなしの場合、ペーストは7日後に期限切れとなり、常に公開されます。',
    'section_paste' => 'ペースト設定',
    'api_key' => 'APIキー',
    'api_key_helper' => '任意 – https://pastefox.com/dashboard からAPIキーを取得',
    'visibility' => '公開範囲',
    'visibility_public' => '公開',
    'visibility_private' => '非公開（APIキーが必要）',
    'visibility_helper' => '非公開ペーストにはAPIキーが必要です',
    'effect' => 'ビジュアルエフェクト',
    'effect_none' => 'なし',
    'effect_matrix' => 'マトリックスレイン',
    'effect_glitch' => 'グリッチ',
    'effect_confetti' => '紙吹雪',
    'effect_scratch' => 'スクラッチカード',
    'effect_puzzle' => 'パズル公開',
    'effect_slots' => 'スロットマシン',
    'effect_shake' => 'シェイク',
    'effect_fireworks' => '花火',
    'effect_typewriter' => 'タイプライター',
    'effect_blur' => 'ぼかし公開',
    'password' => 'パスワード保護',
    'password_helper' => '任意 – 4〜100文字',

    // Custom Domain
    'section_custom_domain' => 'カスタムドメイン',
    'section_custom_domain_description' => 'ペースト共有に独自ドメインを使用します。APIキーが必要です。ダッシュボード → カスタムドメインでドメインを管理してください。',
    'custom_domain' => 'カスタムドメイン',
    'custom_domain_none' => 'なし（pastefox.comを使用）',
    'custom_domain_helper' => 'ペーストURLに使用する認証済みドメインを選択',
    'custom_domain_no_api_key' => 'カスタムドメインにはAPIキーが必要です',
    'custom_domain_fetch_error' => 'ドメインを取得できませんでした',
    'custom_domain_inactive' => '無効',

    // File sharing
    'file_not_found' => 'ファイルが見つかりません',
    'file_type_not_allowed' => 'このファイルタイプは共有できません。テキストベースのファイル（log、txt、cfg、json、yaml など）のみサポートされています。',

    // Advanced
    'section_advanced' => '詳細設定',
    'section_advanced_description' => 'デバッグログと機能の切り替え。',
    'file_sharing' => 'ファイル共有',
    'file_sharing_helper' => 'ファイルエディタからPasteFox経由でファイルを共有することを許可します。',
    'debug' => 'デバッグログ',
    'debug_helper' => 'トラブルシューティングのため、すべてのPasteFox ShareアクションをLaravelログファイルに記録します。',
];
