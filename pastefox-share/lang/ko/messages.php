<?php

return [
    'share_logs' => '로그 공유',
    'share_file' => '공유',
    'uploaded' => 'PasteFox에 로그가 업로드되었습니다',
    'file_uploaded' => 'PasteFox에 파일이 업로드되었습니다',
    'upload_failed' => '업로드 실패',
    'api_key_missing' => 'PasteFox API 키가 설정되지 않았습니다. 플러그인 설정에서 추가하세요.',
    'expires_7_days' => '⚠️ API 키 없이는 붙여넣기가 7일 후 만료됩니다',

    // Settings
    'settings_saved' => '설정이 저장되었습니다',
    'section_api' => 'API 설정',
    'section_api_description' => 'API 키 없이는 붙여넣기가 7일 후 만료되며 항상 공개됩니다.',
    'section_paste' => '붙여넣기 설정',
    'api_key' => 'API 키',
    'api_key_helper' => '선택 사항 – https://pastefox.com/dashboard 에서 API 키를 받으세요',
    'visibility' => '공개 범위',
    'visibility_public' => '공개',
    'visibility_private' => '비공개 (API 키 필요)',
    'visibility_helper' => '비공개 붙여넣기에는 API 키가 필요합니다',
    'effect' => '시각 효과',
    'effect_none' => '없음',
    'effect_matrix' => '매트릭스 비',
    'effect_glitch' => '글리치',
    'effect_confetti' => '색종이',
    'effect_scratch' => '스크래치 카드',
    'effect_puzzle' => '퍼즐 공개',
    'effect_slots' => '슬롯 머신',
    'effect_shake' => '흔들기',
    'effect_fireworks' => '불꽃놀이',
    'effect_typewriter' => '타자기',
    'effect_blur' => '블러 공개',
    'password' => '비밀번호 보호',
    'password_helper' => '선택 사항 – 4~100자',

    // Custom Domain
    'section_custom_domain' => '사용자 지정 도메인',
    'section_custom_domain_description' => '붙여넣기 공유에 자체 도메인을 사용하세요. API 키가 필요합니다. 대시보드 → 사용자 지정 도메인에서 도메인을 관리하세요.',
    'custom_domain' => '사용자 지정 도메인',
    'custom_domain_none' => '없음 (pastefox.com 사용)',
    'custom_domain_helper' => '붙여넣기 URL에 사용할 인증된 도메인을 선택하세요',
    'custom_domain_no_api_key' => '사용자 지정 도메인에는 API 키가 필요합니다',
    'custom_domain_fetch_error' => '도메인을 가져올 수 없습니다',
    'custom_domain_inactive' => '비활성',

    // File sharing
    'file_not_found' => '파일을 찾을 수 없습니다',
    'file_type_not_allowed' => '이 파일 유형은 공유할 수 없습니다. 텍스트 기반 파일(log, txt, cfg, json, yaml 등)만 지원됩니다.',

    // Advanced
    'section_advanced' => '고급 설정',
    'section_advanced_description' => '디버그 로깅 및 기능 설정.',
    'file_sharing' => '파일 공유',
    'file_sharing_helper' => '파일 편집기에서 PasteFox를 통한 파일 공유를 허용합니다.',
    'debug' => '디버그 로깅',
    'debug_helper' => '문제 해결을 위해 모든 PasteFox Share 작업을 Laravel 로그 파일에 기록합니다.',
];
