<?php

return [
    'share_logs' => 'Compartilhar logs',
    'share_file' => 'Compartilhar',
    'uploaded' => 'Logs enviados para o PasteFox',
    'file_uploaded' => 'Arquivo enviado para o PasteFox',
    'upload_failed' => 'Falha no envio',
    'api_key_missing' => 'Chave de API do PasteFox não configurada. Adicione nas configurações do plugin.',
    'expires_7_days' => '⚠️ Sem chave de API, o paste expira em 7 dias',

    // Settings
    'settings_saved' => 'Configurações salvas',
    'section_api' => 'Configuração da API',
    'section_api_description' => 'Sem chave de API, os pastes expiram após 7 dias e são sempre públicos.',
    'section_paste' => 'Configurações do paste',
    'api_key' => 'Chave de API',
    'api_key_helper' => 'Opcional – Obtenha sua chave de API em https://pastefox.com/dashboard',
    'visibility' => 'Visibilidade',
    'visibility_public' => 'Público',
    'visibility_private' => 'Privado (requer chave de API)',
    'visibility_helper' => 'Pastes privados requerem uma chave de API',
    'effect' => 'Efeito visual',
    'effect_none' => 'Nenhum',
    'effect_matrix' => 'Chuva Matrix',
    'effect_glitch' => 'Glitch',
    'effect_confetti' => 'Confete',
    'effect_scratch' => 'Raspadinha',
    'effect_puzzle' => 'Revelação de quebra-cabeça',
    'effect_slots' => 'Caça-níqueis',
    'effect_shake' => 'Tremor',
    'effect_fireworks' => 'Fogos de artifício',
    'effect_typewriter' => 'Máquina de escrever',
    'effect_blur' => 'Revelação desfocada',
    'password' => 'Proteção por senha',
    'password_helper' => 'Opcional – 4 a 100 caracteres',

    // Custom Domain
    'section_custom_domain' => 'Domínio personalizado',
    'section_custom_domain_description' => 'Use seu próprio domínio para compartilhar pastes. Requer chave de API. Gerencie domínios em Painel → Domínios personalizados.',
    'custom_domain' => 'Domínio personalizado',
    'custom_domain_none' => 'Nenhum (usar pastefox.com)',
    'custom_domain_helper' => 'Selecione um domínio verificado para as URLs de paste',
    'custom_domain_no_api_key' => 'Chave de API necessária para domínios personalizados',
    'custom_domain_fetch_error' => 'Não foi possível obter os domínios',
    'custom_domain_inactive' => 'inativo',

    // File sharing
    'file_not_found' => 'Arquivo não encontrado',
    'file_type_not_allowed' => 'Este tipo de arquivo não pode ser compartilhado. Apenas arquivos de texto (log, txt, cfg, json, yaml, etc.) são suportados.',

    // Advanced
    'section_advanced' => 'Configurações avançadas',
    'section_advanced_description' => 'Registro de depuração e opções de funcionalidades.',
    'file_sharing' => 'Compartilhamento de arquivos',
    'file_sharing_helper' => 'Permitir compartilhar arquivos do editor via PasteFox.',
    'debug' => 'Registro de depuração',
    'debug_helper' => 'Registrar todas as ações do PasteFox Share no arquivo de log do Laravel para solução de problemas.',
];
