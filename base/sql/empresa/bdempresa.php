<?php
class bdservidor{
	function bdservidor($db){
		$this->db = $db;
	}
	
	function select_dadosEmpresa($seq_empresa=""){
		try {
			$sql 	= "	SELECT *						
						FROM adm_empresa em
						WHERE em.seq_empresa='".$seq_empresa."' or '-1'='".$seq_empresa."';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function update_Empresa($parametros){
		try {
			$sql 	= "Update `adm_empresa`
						       set    dsc_empresa_cnpj 					= '".$parametros['dsc_empresa_cnpj']."',
						      		  dsc_empresa_razao					= '".$parametros['dsc_empresa_razao']."',
						             `dsc_empresa_fantasia`				= '".$parametros['dsc_empresa_fantasia']."',
						             `dsc_empresa_telefone`				= '".$parametros['dsc_empresa_telefone']."',
						             `dsc_empresa_endereco`				= '".$parametros['dsc_empresa_endereco']."',
						             `dsc_empresa_bairro`				= '".$parametros['dsc_empresa_bairro']."',
						             `dsc_empresa_cidade`				= '".$parametros['dsc_empresa_cidade']."',
						             `dsc_empresa_uf`					= '".$parametros['dsc_empresa_uf']."',
						             `dsc_empresa_cep`					= '".$parametros['dsc_empresa_cep']."',						             						             
						             `flg_empresa_ativa`				= '".$parametros['flg_empresa_ativa']."',						             
						             seq_usuario_alteracao				= '".$_SESSION['seq_usuario']."',
						             dat_data_alteracao					= now()
						WHERE seq_empresa = '".$parametros['seq_empresa']."';";
			//echo $sql;							
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