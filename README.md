# hermes
Hermes Framework

Versão 0.4.2
- Corrigido o trecho de código na página index.php
	// se nao estiver com as variaveis requeridas, ele redireciona
	if(!$d && !$a && !$f){				
		require_once('public/redirect.php');		
		exit;		
	}
- Corrigido a função de redirecionamento public/redirect.php 
	- Agora o redirecionamento é feito no onload na tag body
- Criado as constantes:
	- _PATH_ (para o path do sistema)
	- _FRAMEWORK_ (para o caminho da pasta framework)
	- _CONFIG_ (para o caminho da pasta config)
	- _BASE_ (para o caminho da pasta base)
	- _PUBLIC_ (para o caminho da pasta public)

Versão 0.4.1
- Adicionado o grupo administrativo (Saúde, Educação, Entreterimento, etc.).
- Alteração da tabela seg_usuario (flg_usuario_status -> flg_usuario_ativo).
- Alteração da tabela seg_perfil (flg_perfil_status -> flg_perfil_ativo).

Versão 0.4.0
- Migrado para o novo template todas rotinas de segurança.
- Correção do módulo de permissões do usuário.
- Correção das mensagens de cadastro.

Versão 0.3.0
- Aplicação do novo template (bootstrap).
- Atualização da biblioteca datatables.

Versão 0.2.0
- Migração do login
- Criação da nova estrutura do framework.

Versão 0.1.0
- Versão inicial.
- Atualização da biblioteca ADODB.
- Atualização da biblioteca de templates.
