<?php
class index{
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
	
	
	
	function Principal(){
		//echo "<pre>";
		//print_r($_SESSION);
		//echo "</pre>";
		//$estadocivil		= $this->aux->indicador('ind_estado_civil');
		//print_r($estadocivil);
		//exit;			
		//$this->smarty->assign('estatistica',$estatistica);
		
		return true;
	}
	
	function formSenhaFraca(){
		echo $this->smarty->fetch('./base/html/index/index_formSenhaFraca.html');
        exit;		
	}
	
	function sair(){
		session_destroy();
		$parametros['a'] = 'index';
		$parametros['d'] = 'index';
		$parametros['f'] = 'Principal';	
		$this->token->redirect($parametros);
	}
}
