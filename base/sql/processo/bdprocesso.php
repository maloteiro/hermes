<?php
class bdprocesso{
	function bdprocesso($db){
		$this->db = $db;
	}
	
	function select_dadosCadastro($sequencial=""){
		try {
			$sql 	= "	SELECT *						
						FROM tbl_processo 
						WHERE seq_processo='".$sequencial."' or '-1'='".$sequencial."';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	
	function select_dadosClienteId($nome){
		try {
			$sql 	= "	SELECT seq_cliente, nom_cliente_nome_razao, nom_cliente_nome_razao						
						FROM tbl_cliente
						WHERE nom_cliente_nome_razao='".$nome."'";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function select_dadosCliente(){
		try {
			$sql 	= "	SELECT seq_cliente as 'id', nom_cliente_nome_razao as 'label', nom_cliente_nome_razao as 'value'						
						FROM tbl_cliente";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function select_dadosParte($seq_processo){
		try {
			$sql = "SELECT nom_cliente_nome_razao
					FROM `tbl_processo_autor` pa 
					INNER JOIN `tbl_cliente` cl ON pa.seq_cliente=cl.seq_cliente
					WHERE pa.seq_processo='".$seq_processo."'";
					
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;
		} catch (Exception $e){
			return false;
		}
	}
	
	function update_Cadastro($parametros){
		try {
			$sql 	= "Update `tbl_processo`
						       set    num_processo_numero 				= '".$parametros['num_processo_numero']."',
						      		  dat_processo_distribuicao			= '".dateformartANSI($parametros['dat_processo_distribuicao'])."',
						             `dsc_processo_orgao_julgador`		= '".$parametros['dsc_processo_orgao_julgador']."',
						             `dsc_processo_classe`				= '".$parametros['dsc_processo_classe']."',
						             `dsc_processo_assunto`				= '".$parametros['dsc_processo_assunto']."',
						             `dsc_processo_palavra_chave`		= '".$parametros['dsc_processo_palavra_chave']."',
						             `flg_processo_encerrado`			= '".$parametros['flg_processo_encerrado']."',						             						             
						             seq_usuario_alteracao				= '".$_SESSION['seq_usuario']."',
						             dat_data_alteracao					= now()
						WHERE seq_processo = '".$parametros['seq_processo']."';";
			//echo $sql;
			//exit;							
			$q = $this->db->execute($sql);			
			return true;				
		} catch (Exception $e) {
			return false;
		}
	}	
	
	function insert_Cadastro($parametros){
		try {
			$sql 	= "insert INTO `tbl_processo`
						            (
						             `num_processo_numero`,
						             `dat_processo_distribuicao`,
						             `dsc_processo_orgao_julgador`,
						             `dsc_processo_classe`,
						             `dsc_processo_assunto`,
						             `dsc_processo_palavra_chave`,
						             `flg_processo_encerrado`,						             
						             seq_usuario_cadastro,				 
						             dat_data_cadastro,
						             cod_token_codigo					 
									 )
						VALUES (
						        '".$parametros['num_processo_numero']."',
						        '".dateformartANSI($parametros['dat_processo_distribuicao'])."',
						        '".$parametros['dsc_processo_orgao_julgador']."',
						        '".$parametros['dsc_processo_classe']."',
						        '".$parametros['dsc_processo_assunto']."',
						        '".$parametros['dsc_processo_palavra_chave']."',
						        '".$parametros['flg_processo_encerrado']."',						        
						        '".$_SESSION['seq_usuario']."',
						        now(),
						        '".$_SESSION['token']."'
								);";
			//echo $sql;
			//exit;							
			$q = $this->db->execute($sql);			
			return $this->db->Insert_ID();				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function delete_Partes($parametros){
		try {
			$sql 	= "	delete from tbl_processo_autor
						where seq_processo = '".$parametros['seq_processo']."'";
			//echo $sql;						
			$q = $this->db->execute($sql);			
			return true;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function insert_Parte($parametros){
		try {
			$sql 	= "insert INTO `tbl_processo_autor`
						            (
						             `seq_processo`,
						             `seq_cliente`					 
									 )
						VALUES (
						        '".$parametros['seq_processo']."',
						        '".$parametros['seq_cliente']."'
								);";
			//echo $sql;
			//exit;							
			$q = $this->db->execute($sql);			
			return $this->db->Insert_ID();				
		} catch (Exception $e) {
			return false;
		}
	}
			
}
?>