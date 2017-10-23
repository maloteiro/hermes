<?php
class relatorio{
	private $db;
	private $smarty;
	private $token;
	private $sql;
	
	function __construct($classes){
		$this->db 		= $classes['db'];
		$this->smarty 	= $classes['smarty'];
		$this->token 	= $classes['token'];
		$this->sql		= $classes['sql'];		
	}
	
	function formAcompanhante(){
		$acompanhante		= $this->sql->select_dadosAcompanhante();			
		$this->smarty->assign('acompanhantes',$acompanhante);
		
		$estatistica		= $this->sql->select_dadosEstatistica($_POST['seq_acompanhante']);			
		$this->smarty->assign('estatistica',$estatistica);
		
		return true;
	}	
	
	function formTotais(){	
		$estatistica		= $this->sql->select_dadosTotais();			
		$this->smarty->assign('estatistica',$estatistica);
		
		return true;
	}
}
?>