<?php
class advogado{
	private $db;
	private $smarty;
	private $token;
	private $sql;
	private $aux;
	
	function __construct($classes){
		$this->db 		= $classes['db'];
		$this->smarty 	= $classes['smarty'];
		$this->token 	= $classes['token'];
		$this->sql		= $classes['sql'];		
		$this->aux		= $classes['aux'];		
	}
	
	function formConsulta(){
		 permissao($_POST);		 
		 $dados = $this->sql->select_dadosCadastro("-1");
		 $this->smarty->assign('dados',$dados);
		 return true;
	}	
	
	function formCadastro(){	
		permissao($_POST);
		if($_POST['seq_advogado']){			
			$dados = $this->sql->select_dadosCadastro($_POST['seq_advogado']);												
			$this->smarty->assign('dados',$dados[0]);
		}			
		return true;
	}
	
	function salvarCadastro(){
		
		permissao($_POST);		
		if(!$_POST['flg_advogado_ativo']) $_POST['flg_advogado_ativo']='N';		
				
						
		if(!$_POST['seq_advogado']){			
			$seq_advogado = $this->sql->insert_Cadastro($_POST);			
			$msg = "Dados gravados com sucesso";			
		}
		
		if($_POST['seq_advogado']){			
			$seq_advogado = $_POST['seq_advogado'];
			$this->sql->update_Cadastro($_POST);			
			$msg = "Dados alterados com sucesso";
		}
		
		$_POST['seq_advogado'] 		= $seq_advogado;				
		
		$parametros['a'] 			= 'advogado';
		$parametros['d'] 			= 'advogado';
		$parametros['f'] 			= 'formCadastro';			
		$parametros['seq_advogado']	= $seq_advogado;	
		$parametros['msg'] 			= $msg;
			
		$parametros['token'] 		= $_SESSION['token'];
		$this->token->redirect($parametros);		
	}
}