<?php
class bdgrupo{
	function bdgrupo($db){
		$this->db = $db;
	}
		
	function select_dadosGrupo($seq_grupo=""){
		try {
			$sql 	= "SELECT * 
					FROM tbl_grupo
					where seq_grupo='".$seq_grupo."' or '-1'='".$seq_grupo."';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function insert_Grupo($parametros){
		try {
			$sql 	= "INSERT INTO `tbl_grupo`						         
						       (`dsc_grupo_descricao`,						        
						        `flg_grupo_ativo`,
						        `dat_data_cadastro`,
						        `seq_usuario_cadastro`)
						VALUES (upper('".utf8_decode($parametros['dsc_grupo_descricao'])."'),						  						        
						        '".$parametros['flg_grupo_ativo']."',
						        now(),
						        '".$_SESSION['seq_usuario']."');";
			//echo $sql;							
			$q = $this->db->execute($sql);			
			return $this->db->Insert_ID();				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function update_Grupo($parametros){
		try {
			$sql 	= "UPDATE `tbl_grupo`	SET					         
						        `dsc_grupo_descricao`	=UPPER('".utf8_decode($parametros['dsc_grupo_descricao'])."'),
						        					        
						        `flg_grupo_ativo`		='".$parametros['flg_grupo_ativo']."',
						        `dat_data_alteracao`	=now(),
						        `seq_usuario_alteracao`		='".$_SESSION['seq_usuario']."'
						        
						WHERE seq_grupo='".$parametros['seq_grupo']."'
						";
			//echo $sql;
			try {
			   $q = $this->db->execute($sql);
			   return true;
			} catch (exception $e) {
			    echo $e;
				return false;
			}							
		} catch (Exception $e) {
			return false;
		}
	}	
	
	function select_validaGrupo($parametros){
		try {
			$sql 	= "	SELECT * 
						FROM tbl_grupo
						where dsc_grupo_descricao		='".utf8_decode($parametros['dsc_grupo_descricao'])."';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			if($res){				
				return true;
			}else{
				return false;
			}			
		} catch (Exception $e) {
			return false;
		}
	}
	
	
	function rc($valor){
		return str_replace(' ','',str_replace(')','',str_replace('(','',str_replace(',','',str_replace('.','',str_replace('-','',$valor))))));
	}
}
?>