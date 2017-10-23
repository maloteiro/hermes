<?php
class usuario{
	private $db;
	private $smarty;
	private $token;
	private $sql;
	private $aux;
	private $email;
	
	function __construct($classes){
		$this->db 		= $classes['db'];
		$this->smarty 	= $classes['smarty'];
		$this->token 	= $classes['token'];
		$this->sql		= $classes['sql'];		
		$this->aux		= $classes['aux'];
		$this->email	= $classes['mail'];
	}
	
	function formAlteracaoSenha(){
		return true;
	}
	
	function enviarNovaSenha(){
		 // Instanciar o objeto
		try {								
			permissao($_POST);
			$usuario = $this->sql->select_dadosUsuario($_POST['usuario']);
			
			$_POST['dsc_usuario_senha'] = geraSenha();
			$_POST['dsc_usuario_email'] = $_POST['usuario'];
			if(!$usuario){
				$msg = "Usuário não encontrado no banco de dados.";
			} else {				
				if($usuario[0]['flg_usuario_status']==0){
					$msg = "O seu cadastro ainda não foi ativado.";					
				}
				if($this->sql->update_Senha($_POST)){
					
					
					$html = "<html>
					<head>
					</head>
					<body>
						Olá <strong>".$usuario[0]['dsc_usuario_nome']."</strong>, você solicitou uma nova senha para acesso ao sistema.<br />
						<br />
						<strong>E-mail:</strong> ".$_POST['dsc_usuario_email']."<br />
						<strong>Senha:</strong> ".$_POST['dsc_usuario_senha']."<br />
						<br />
						Estamos à disposição para qualquer dúvida. Basta nos contatar!<br />
						<br />
						<strong>Data/Hora</strong>: ".dateansi()."<br />
						<strong>IP:</strong> ".ip()."<br />
						<br />
						Caso você não tenha solicitado este lembrete, acima encontram-se informações sobre o horário e o endereço IP da máquina de onde partiu a solicitação.<br />
						<br />
						Obrigado!<br />
						<br />
						Atenciosamente,<br />
						Cloud Desk - O Seu Escritório Virtual!";
						
					if($this->enviarEmail($usuario[0]['dsc_usuario_email'],$usuario[0]['dsc_usuario_nome'],$html)){
							
						$msg = "Foi enviado um e-mail com a nova senha.<br />Por favor acesse a sua conta e verifique.";
					} else {
						$msg = "Ocorreu um erro ao enviar a sua senha.";
					}
					
				} else{
					$msg = "Ocorreu um erro ao atualizar o cadastro.";
				}
			}
			
			//echo $msg;
			//print_r($usuario);
			//exit;
			//$msg = "Foi enviado um e-mail com a nova senha.<br />Por favor acesse a sua conta e verifique.";
			
			$parametros['a'] = 'login';
			$parametros['d'] = 'login';
			$parametros['f'] = 'formLogin';
			$parametros['token'] 	= $_SESSION['token'];
			$parametros['msg']		= $msg;
			$this->token->redirect($parametros);
			exit;
			return true;
		} catch (Exception $e) {
			$this->error->register();
			echo "Erro. <a href='#'>".$e->getMessage()."</a>";			
			exit;			
		}
	}
	
	function enviarEmail($destinatario="",$destinatario_nome="",$html=""){
		/*
		echo $destinatario."<br />";
		echo $destinatario_nome."<br />";
		echo $html;
		echo "<br />";
		echo "<br />";
		//exit;
		*/  
		$enviado = false; 
		date_default_timezone_set('America/Sao_Paulo');		
		$this->email->isSMTP();
		$this->email->isHTML(true);
		$this->email->SMTPDebug = 0;
		$this->email->Debugoutput = 'html';
		$this->email->Host = "correio.clouddesk.com.br";
		$this->email->Port = 26;
		$this->email->SMTPAuth = true;
		$this->email->Username = "loteria@clouddesk.com.br";
		$this->email->Password = "Sd23*km9A";
		$this->email->setFrom('loteria@clouddesk.com.br', 'Sistema de Loteria');
		//Set an alternative reply-to address
		$this->email->addReplyTo('loteria@clouddesk.com.br', 'Sistema de Loteria');
		//Set who the message is to be sent to
		$this->email->addAddress($destinatario, $destinatario_nome);
		$this->email->Subject = '[CLOUD DESK] [Loteria] Nova Senha';
		$this->email->Body=$html;
		//send the message, check for errors
		
		if (!$this->email->send()) {
			$enviado = false;
		    //echo "Mailer Error: " . $this->email->ErrorInfo;
		} else {
			//echo "aqui";
			$enviado = true;
		    //echo "Message sent! <br />";
			//echo $destinatario."<br />";
			//echo $destinatario_nome."<br />";
			//echo $html;
			//echo "<br />";
			//echo "<br />";
		}
		
		$this->email->ClearAllRecipients();
		return $enviado;
		//unset($this->email);
	}
}
?>