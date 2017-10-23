<?php
class bdauxiliar{
	function bdauxiliar($db){
		$this->db = $db;
	}
	
	function indicador($nome_coluna){
		$sql 	= "	SELECT codigo, descricao 
					FROM aux_auxiliar
					WHERE nome_coluna='".$nome_coluna."'
					order by descricao;";
		//echo "<pre>"; print_r($sql); "</pre>"; die();					
		$q = $this->db->execute($sql);		
		$res = $q->getRows();
		return $res;
	}
	
	function select_cmbPerfil(){
		$where = $_SESSION['seq_perfil'] == 1 ? "" : " and seq_perfil>=".$_SESSION['seq_perfil'];
		$sql 	= "	SELECT * 
					FROM seg_perfil
					where flg_perfil_ativo='S' ".$where.";";
		//echo "<pre>"; print_r($sql); "</pre>"; die();							
		$q = $this->db->execute($sql);		
		$res = $q->getRows();
		return $res;
	}
	
	function select_cmbEmpresa($seq_empresa=""){
		$sql 	= "	SELECT * 
					FROM adm_empresa
					where flg_empresa_ativa='1' and (seq_empresa='".$seq_empresa."' or '-1'='".$seq_empresa."');";
		//echo "<pre>"; print_r($sql); "</pre>"; die();							
		$q = $this->db->execute($sql);		
		$res = $q->getRows();
		return $res;
	}
	
	
	
	function select_dadosCategorias($seq_categoria=""){
		try {
			$sql 	= "	SELECT * 
						FROM adm_categoria
						WHERE flg_categoria_ativa='S' AND
					 	seq_categoria='".$seq_categoria."' or '-1'='".$seq_categoria."';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}	
	
	
}
?>