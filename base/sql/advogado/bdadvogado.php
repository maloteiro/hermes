<?php
class bdadvogado{
	function bdadvogado($db){
		$this->db = $db;
	}
	
	function select_dadosCadastro($sequencial=""){
		try {
			$sql 	= "	SELECT *						
						FROM tbl_advogado 
						WHERE seq_advogado='".$sequencial."' or '-1'='".$sequencial."';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	
	function update_Cadastro($parametros){
		try {
			$sql 	= "Update `tbl_advogado`
						       set    nom_advogado_nome 				= '".$parametros['nom_advogado_nome']."',
						       		  dsc_advogado_email 				= '".$parametros['dsc_advogado_email']."',
						      		  num_advogado_oab					= '".$parametros['num_advogado_oab']."',
						             `flg_advogado_ativo`				= '".$parametros['flg_advogado_ativo']."',						             					             						             
						             seq_usuario_alteracao				= '".$_SESSION['seq_usuario']."',
						             dat_data_alteracao					= now()
						WHERE seq_advogado = '".$parametros['seq_advogado']."';";
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
			$sql 	= "insert INTO `tbl_advogado`
						            (
						             `nom_advogado_nome`,
						             dsc_advogado_email,
						             `num_advogado_oab`,
						             `flg_advogado_ativo`,						             
						             seq_usuario_cadastro,				 
						             dat_data_cadastro,
						             cod_token_codigo					 
									 )
						VALUES (
						        '".$parametros['nom_advogado_nome']."',
						        '".$parametros['dsc_advogado_email']."',
						        '".$parametros['num_advogado_oab']."',
						        '".$parametros['flg_advogado_ativo']."',						        
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
	
	
			
}
?>