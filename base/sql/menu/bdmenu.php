<?php
class bdmenu{
	function bdmenu($db){
		$this->db = $db;
	}
	
	function select_Modulo(){
		$sql 	= "	SELECT DISTINCT mo.* 
					FROM seg_permissao per
					INNER JOIN seg_rotina rot ON per.seq_rotina=rot.seq_rotina
					INNER JOIN seg_modulo mo ON rot.seq_modulo=mo.seq_modulo
					WHERE mo.flg_modulo_ativo='S'
					AND per.seq_perfil='".$_SESSION['seq_perfil']."'
					ORDER BY mo.num_modulo_ordem;";
		$q = $this->db->execute($sql);
		//echo "<pre>"; print_r($sql); "</pre>"; die();
		$res = $q->getRows();
		return $res;
	}
	
	function select_Rotina($modulo){
		$sql 	= "	SELECT DISTINCT rot.* 
					FROM seg_permissao per
					INNER JOIN seg_rotina rot ON per.seq_rotina=rot.seq_rotina
					INNER JOIN seg_modulo mo ON rot.seq_modulo=mo.seq_modulo
					WHERE mo.seq_modulo='".$modulo."'
					AND per.seq_perfil='".$_SESSION['seq_perfil']."'
					AND rot.flg_rotina_ativa='S'
					ORDER BY rot.num_rotina_ordem;";
		//echo "<pre>"; print_r($sql); "</pre>"; die();					
		$q = $this->db->execute($sql);
		//echo "<pre>"; print_r($sql); "</pre>"; die();
		$res = $q->getRows();
		return $res;
	}
}
?>
