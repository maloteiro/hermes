<?php
class mapa{
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
		$dados = $this->sql->select_dadosCadastro("-1");
		$this->smarty->assign('dados',$dados);
		return true;
	}
	
	function formCadastro(){
		//print_r($_SESSION);
		permissao($_POST);
		//$this->smarty->assign('modulos',$this->sql->select_RotinaModulo());		
		$dados = $this->sql->select_dadosCadastro($_POST['seq_mapa']);
		if($dados){
			$this->smarty->assign('dados',$dados[0]);
			$this->smarty->assign('update',"S");
		}else{
			$this->smarty->assign('update',"N");
		}
				
		
		return true;
	}
	
	
	function salvarCadastro(){
		try {
			permissao($_POST);
			
			if(!$_POST['flg_mapa_ativo']) $_POST['flg_mapa_ativo']='N'; 
					
			if($this->sql->select_validaCadastro($_POST) && $_POST['update']=="N"){
				throw new Exception("Erro. <a href='#'>Não foi possível gravar os dados, os dados informados estão duplicados.</a>");				
			}else{
				if($_POST['update']=="S"){
					$id = $_POST['seq_mapa'];	
					$this->sql->update_Cadastro($_POST);	
				}else{					
					$id = $this->sql->insert_Cadastro($_POST);
				}
				
				
				$dadosJson = $this->sql->select_carregaCadastro();
				$name = '../js/pontos.json';
				$text = json_encode($dadosJson);
				$file = fopen($name, 'w+');
				fwrite($file, $text);
				fclose($file);				
			}
			echo "Mensagem. <a href='#'>Dados gravados com sucesso</a>";
			echo "<input type='hidden' name='tmp_seq_mapa' id='tmp_seq_mapa' value='".$id."'/>";
			//print_r($_POST);
			exit;
		} catch (Exception $e) {			
			echo "Erro. <a href='#'>".$e->getMessage()."</a>";			
			exit;			
		}		
	}
}
?>