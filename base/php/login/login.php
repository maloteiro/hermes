<?php
class login{
	private $db;
	private $smarty;
	private $token;
	private $sql;
	
	function __construct($classes){
		$this->db 		= $classes['db'];
		$this->smarty 	= $classes['smarty'];
		$this->token 	= $classes['token'];
		$this->sql		= $classes['sql'];
		require_once "framework/plugins/error/error.php";
		$this->error = new Error();
	}
	
	function formLogin(){
		return true;
	}
	
	function validarAcesso(){
		 // Instanciar o objeto
		try {		
			permissao($_POST);
			//$usuario 			= str_replace('.','',$_POST['usuario']);
			//$usuario 			= str_replace('.','',$usuario);
			//$usuario 			= str_replace('-','',$usuario); 			
			//$_POST['usuario'] 	= $usuario;	//$usuario = $_POST['usuario'];
				
			$login = $this->sql->validarAcesso($_POST);
			
			if(!$login){				
				$parametros['msg'] = "Usuário/Senha Inválido! Tente novamente";
				$parametros['token'] 		= $_SESSION['token'];
				$this->token->redirect($parametros);
			}else{
				$_SESSION['seq_usuario']			= $login[0]['seq_usuario'];				
				$_SESSION['dsc_usuario_nome']		= $login[0]['dsc_usuario_nome'];
				$_SESSION['dsc_usuario_email']		= $login[0]['dsc_usuario_email'];
				$_SESSION['dsc_usuario_email2']		= $login[0]['dsc_usuario_email2'];
				$_SESSION['dsc_usuario_cpf']		= $login[0]['dsc_usuario_cpf'];				
				$_SESSION['seq_perfil']				= $login[0]['seq_perfil'];
				$_SESSION['dsc_perfil_nome']		= $login[0]['dsc_perfil_nome'];
				$_SESSION['sig_perfil_sigla']		= $login[0]['sig_perfil_sigla'];
				//$_SESSION['seq_empresa']			= $login[0]['seq_empresa'];								
			}
			
			//print_r($_SESSION);
			//exit;
			
			$senhaF = $this->sql->select_senhaFraca($_POST['senha']);
					
			if(($_POST['senha'] == $usuario) || $senhaF){				
				$parametros['a'] = 'index';
				$parametros['d'] = 'index';
				$parametros['f'] = 'formSenhaFraca';						
			} else {
				$parametros['a'] = 'index';
				$parametros['d'] = 'index';
				$parametros['f'] = 'Principal';						
			}
			
			
			$parametros['token'] 		= $_SESSION['token'];
			$this->token->redirectToIndex($parametros);
			exit;
			return true;
		} catch (Exception $e) {
			$this->error->register();
			echo "Erro. <a href='#'>".$e->getMessage()."</a>";			
			exit;			
		}
	}

	function salvarAlterarSenha(){				
		permissao($_POST);
			
		$resultadoValidacao = $this->sql->select_verificarSenha($_SESSION['dsc_usuario_email'], $_POST['senha_atual']);
		$senha = $this->sql->select_senhaFraca($_POST['nova_senha']);
		
		if($resultadoValidacao){
			if($_POST['senha_atual']==$_POST['nova_senha']){				
				$parametros['msg'] 	= "<small class='label pull-right bg-red'>Erro.</small> <a href='#'>Não foi possível alterar a senha, pois a senha atual é igual a nova senha.</a>";
				$parametros['a'] 	= 'index';
				$parametros['d'] 	= 'index';
				$parametros['f'] 	= 'formSenhaFraca';
				$parametros['token']= $_SESSION['token'];
				//echo "senha atual igual a nova senha";
				$this->token->redirect($parametros);
				exit;					
			} elseif($senha || ($_SESSION['dsc_usuario_cpf']==$_POST['nova_senha'])){				
				$parametros['msg'] 	= "<small class='label pull-right bg-red'>Erro</small> <a href='#'>Não foi possível alterar a senha, pois a sua senha é muito fraca.</a>";
				$parametros['a'] 	= 'index';
				$parametros['d'] 	= 'index';
				$parametros['f'] 	= 'formSenhaFraca';
				$parametros['token']= $_SESSION['token'];
				//echo "senha fraca ou nova senha igual ao cpf";
				$this->token->redirect($parametros);
				exit;						
			} else {															
				$this->sql->update_alterarSenha($_POST);								
				$parametros['msg'] 	= 'Senha alterada com sucesso.';
				$parametros['a'] 	= 'index';
				$parametros['d'] 	= 'index';
				$parametros['f'] 	= 'Principal';
				$parametros['token']= $_SESSION['token'];
				$this->token->redirect($parametros);						
				exit;
				return true;			
			}			
		}else{							
			$parametros['msg'] 	= "<small class='label pull-right bg-red'>Erro</small> <a href='#'>A senha atual está incorreta.</a>";
			$parametros['a'] 	= 'index';
			$parametros['d'] 	= 'index';
			$parametros['f'] 	= 'formSenhaFraca';
			$parametros['token']= $_SESSION['token'];
			$this->token->redirect($parametros);
			exit;							
		}			
		exit;			
		
	}
}
?>
