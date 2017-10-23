<?php
class grupo{
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
	
	function formCadastro(){
		//print_r($_SESSION);
		permissao($_POST);
		//$this->smarty->assign('modulos',$this->sql->select_RotinaModulo());		
		$dados = $this->sql->select_dadosGrupo($_POST['seq_grupo']);
		if($dados){
			$this->smarty->assign('dados',$dados[0]);
			$this->smarty->assign('update',"S");
		}else{
			$this->smarty->assign('update',"N");
		}
				
		
		return true;
	}
	
	function formConsulta(){
		$dados = $this->sql->select_dadosGrupo("-1");
		$this->smarty->assign('dados',$dados);
		return true;
	}
	
	function salvarGrupo(){
		try {
			permissao($_POST);
			
			if(!$_POST['flg_grupo_ativo']) $_POST['flg_grupo_ativo']='N'; 
					
			if($this->sql->select_validaGrupo($_POST) && $_POST['update']=="N"){
				throw new Exception("Erro. <a href='#'>Não foi possível gravar os dados, os dados informados estão duplicados.</a>");				
			}else{
				if($_POST['update']=="S"){
					$id = $_POST['seq_grupo'];	
					$this->sql->update_Grupo($_POST);	
				}else{					
					$id = $this->sql->insert_Grupo($_POST);
				}				
			}
			echo "Dados gravados com sucesso";
			echo "<input type='hidden' name='tmp_seq_grupo' id='tmp_seq_grupo' value='".$id."'/>";
			//print_r($_POST);
			exit;
		} catch (Exception $e) {			
			echo "Erro. <a href='#'>".$e->getMessage()."</a>";			
			exit;			
		}		
	}
	
	
	
}
?>