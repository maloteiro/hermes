<?php
class empresa{
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
	
	function formCadastro(){
		if($_POST['seq_empresa']){
			$empresa = $this->sql->select_dadosEmpresa($_POST['seq_empresa']);
						
			$this->smarty->assign('dados',$empresa[0]);
		}
			
		return true;
	}
	
	function salvarEmpresa(){				
		if(!$_POST['seq_empresa']){
			$seq_empresa = $this->sql->insert_Empresa($_POST);
			$msg = "Dados gravados com sucesso";			
		}
		
		if($_POST['seq_empresa']){
			$seq_empresa = $_POST['seq_empresa'];
			$this->sql->update_Empresa($_POST);
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