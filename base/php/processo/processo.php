<?php
class processo{
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
	
	function ajaxCliente(){
		$dados = $this->sql->select_dadosCliente();
		
		$i = 0;
		foreach($dados as $dado){			
			$dados[$i]['id'] 		= $dado['id'];
			$dados[$i]['label'] 	= utf8_encode($dado['label']);
			$dados[$i]['value'] 	= utf8_encode($dado['value']);
			$i++;
		}
		
		echo json_encode($dados);
		exit;
	}
	
	function formCadastro(){	
		permissao($_POST);
		if($_POST['seq_processo']){
			
			$dados = $this->sql->select_dadosCadastro($_POST['seq_processo']);
			$partes = $this->sql->select_dadosParte($_POST['seq_processo']);
			$nom_cliente_nome_razao = "";
			foreach($partes as $parte){			
				$nom_cliente_nome_razao .= $parte['nom_cliente_nome_razao'].",";								
			}
			
			$nom_cliente_nome_razao =substr($nom_cliente_nome_razao,0,-1);
			$dados[0]['nom_cliente_nome_razao'] = $nom_cliente_nome_razao;
												
			$this->smarty->assign('dados',$dados[0]);
		}
			
		return true;
	}
	
	function salvarCadastro(){		
		$partes = explode(',', $_POST['nom_cliente_nome_razao']);		
						
		if(!$_POST['seq_processo']){			
			$seq_processo = $this->sql->insert_Cadastro($_POST);
			if($seq_processo){
				$this->sql->delete_Partes($_POST);				
				foreach($partes as $parte){
					$cliente = $this->sql->select_dadosClienteId($parte);						
					$dados['seq_processo'] 	= $seq_processo;
					$dados['seq_cliente'] 	= $cliente[0]['seq_cliente'];
					$this->sql->insert_Parte($dados);					
				}	
			}
			$msg = "Dados gravados com sucesso";			
		}
		
		if($_POST['seq_processo']){			
			$seq_processo = $_POST['seq_processo'];
			$this->sql->update_Cadastro($_POST);
			if($seq_processo){
				$this->sql->delete_Partes($_POST);				
				foreach($partes as $parte){
					$cliente = $this->sql->select_dadosClienteId($parte);						
					$dados['seq_processo'] 	= $seq_processo;
					$dados['seq_cliente'] 	= $cliente[0]['seq_cliente'];
					$this->sql->insert_Parte($dados);					
				}	
			}
			$msg = "Dados alterados com sucesso";
		}
		
		$_POST['seq_processo'] 		= $seq_processo;				
		
		$parametros['a'] 			= 'processo';
		$parametros['d'] 			= 'processo';
		$parametros['f'] 			= 'formCadastro';			
		$parametros['seq_processo']	= $seq_processo;	
		$parametros['msg'] 			= $msg;
			
		$parametros['token'] 		= $_SESSION['token'];
		$this->token->redirect($parametros);		
	}
}