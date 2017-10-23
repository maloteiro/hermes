<?php
class bdmapa{
	function bdmapa($db){
		$this->db = $db;
	}
	
	function select_validaCadastro($parametros){
		try {
			$sql 	= "	SELECT * 
					FROM tbl_mapa
					where dsc_mapa_localidade	='".utf8_decode($parametros['dsc_mapa_localidade'])."'
					and dsc_mapa_latitude		='".$parametros['dsc_mapa_latitude']."'
					and dsc_mapa_longitude		='".$parametros['dsc_mapa_longitude']."'
					and flg_mapa_ativo			='".$parametros['flg_mapa_ativo']."';";
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
	
	function select_carregaCadastro(){
		try {
			$sql 	= "	SELECT 	seq_mapa as 'Id',
								dsc_mapa_latitude as Latitude,
								dsc_mapa_longitude as Longitude,
								dsc_mapa_descricao as Descricao						
						FROM tbl_mapa
						WHERE flg_mapa_ativo='S';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	
	function select_dadosCadastro($sequencial=""){
		try {
			$sql 	= "	SELECT *						
						FROM tbl_mapa
						WHERE seq_mapa='".$sequencial."' or '-1'='".$sequencial."';";
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
			$sql 	= "Update `tbl_mapa`
						       set    dsc_mapa_localidade 				= '".utf8_decode($parametros['dsc_mapa_localidade'])."',
						      		  dsc_mapa_latitude					= '".$parametros['dsc_mapa_latitude']."',
						             `dsc_mapa_longitude`				= '".$parametros['dsc_mapa_longitude']."',
						             `dsc_mapa_descricao`				= '".$parametros['dsc_mapa_descricao']."',
						             `flg_mapa_ativo`					= '".$parametros['flg_mapa_ativo']."',						             
						             seq_usuario_alteracao				= '".$_SESSION['seq_usuario']."',
						             dat_data_alteracao					= now()
						WHERE seq_mapa = '".$parametros['seq_mapa']."';";
			//echo $sql;							
			$q = $this->db->execute($sql);			
			return true;				
		} catch (Exception $e) {
			return false;
		}
	}	
	
	function insert_Cadastro($parametros){
		try {
			$sql 	= "insert INTO `tbl_mapa`
						            (
						             `dsc_mapa_localidade`,
						             `dsc_mapa_latitude`,
						             `dsc_mapa_longitude`,
						             `dsc_mapa_descricao`,
						             `flg_mapa_ativo`,
						             seq_usuario_cadastro,				 
						             dat_data_cadastro					 
									 )
						VALUES (
						        '".utf8_decode($parametros['dsc_mapa_localidade'])."',
						        '".$parametros['dsc_mapa_latitude']."',
						        '".$parametros['dsc_mapa_longitude']."',
						        '".$parametros['dsc_mapa_descricao']."',
						        '".$parametros['flg_mapa_ativo']."',
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