<?php
class bdusuario{
	function bdusuario($db){
		$this->db = $db;
	}
	
	function select_dadosUsuario($email=""){
		try {
			$sql 	= "	SELECT *						
						FROM seg_usuario
						WHERE dsc_usuario_email='".$email."';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function update_Senha($parametros){
		try {
			$sql 	= "Update `seg_usuario`
						       set    dsc_usuario_senha 	= md5('".$parametros['dsc_usuario_senha']."'),
						              dat_data_alteracao	= now()
						WHERE dsc_usuario_email='".$parametros['dsc_usuario_email']."';";
			//echo "<pre>";
			//echo $sql;
			//exit;							
			$q = $this->db->execute($sql);			
			return true;				
		} catch (Exception $e) {
			return false;
		}
	}	
	
	function insert_Empresa($parametros){
		try {
			$sql 	= "insert INTO `adm_empresa`
						            (
						             `dsc_empresa_cnpj`,
						             `dsc_empresa_razao`,
						             `dsc_empresa_fantasia`,
						             `dsc_empresa_telefone`,
						             `dsc_empresa_endereco`,
						             `dsc_empresa_bairro`,
						             `dsc_empresa_cidade`,
						             `dsc_empresa_uf`,
						             `dsc_empresa_cep`,
						             `flg_empresa_ativa`,
						             seq_usuario_cadastro,				 
						             dat_data_cadastro					 
									 )
						VALUES (
						        '".$parametros['dsc_empresa_cnpj']."',
						        '".$parametros['dsc_empresa_razao']."',
						        '".$parametros['dsc_empresa_fantasia']."',
						        '".$parametros['dsc_empresa_telefone']."',
						        '".$parametros['dsc_empresa_endereco']."',
						        '".$parametros['dsc_empresa_bairro']."',
						        '".$parametros['dsc_empresa_cidade']."',
						        '".$parametros['dsc_empresa_uf']."',
						        '".$parametros['dsc_empresa_cep']."',
						        '".$parametros['flg_empresa_ativa']."',
						        '".$_SESSION['seq_usuario']."',
						        now()
								);";
			//echo $sql;							
			$q = $this->db->execute($sql);			
			return $this->db->Insert_ID();				
		} catch (Exception $e) {
			return false;
		}
	}		
}
?>