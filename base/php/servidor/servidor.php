<?php
class servidor{
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
	
	function consultaEmpresa(){
		 $empresa = $this->sql->select_dadosEmpresa("-1");
		 $this->smarty->assign('dados',$empresa);
		 return true;
	}
	
	function formSolicitacao(){
		
		$sistemaoperacional = $this->sql->select_dadosSO();
		$this->smarty->assign('sistemaoperacional',$sistemaoperacional);
		
		if($_POST['seq_solicitacao']){
			$solicitacao = $this->sql->select_dadosSolicitacao($_POST['seq_solicitacao']);
						
			$this->smarty->assign('dados',$solicitacao[0]);
		}
			
		return true;
	}
	
	function salvarSolicitacao(){				
		if(!$_POST['seq_solicitacao']){
			$seq_solicitacao = $this->sql->insert_Solicitacao($_POST);
			$msg = "Dados gravados com sucesso";			
		}
		
		if($_POST['seq_solicitacao']){
			$seq_solicitacao = $_POST['seq_solicitacao'];
			$this->sql->update_Solicitacao($_POST);
			$msg = "Dados alterados com sucesso";
		}
		$_POST['seq_empresa'] = $seq_empresa;				
		
		$parametros['a'] 			= 'empresa';
		$parametros['d'] 			= 'empresa';
		$parametros['f'] 			= 'formCadastro';			
		$parametros['seq_empresa']	= $seq_empresa;	
		$parametros['msg'] 			= $msg;
			
		$parametros['token'] 			= $_SESSION['token'];
		$this->token->redirect($parametros);		
	}
}