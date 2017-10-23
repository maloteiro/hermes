<?php
class bdrelatorio{
	function bdrelatorio($db){
		$this->db = $db;
	}
	
	function select_dadosAcompanhante($seq_acompanhante=""){
		try {
			$sql 	= "	SELECT *, (SELECT COUNT(*) FROM adm_acompanhante_foto af WHERE  af.seq_acompanhante=ac.seq_acompanhante AND af.flg_foto_ativa='S') qtd_fotos
						FROM adm_acompanhante ac
						WHERE ac.seq_acompanhante='".$seq_acompanhante."' or ''='".$seq_acompanhante."';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function select_dadosEstatistica($seq_acompanhante){
		try {
			$sql 	= "	SELECT *, (SELECT SUM(num_estatistica_acesso) FROM adm_estatistica WHERE seq_acompanhante='".$seq_acompanhante."') total
						FROM adm_estatistica
						WHERE seq_acompanhante='".$seq_acompanhante."'
						AND dat_estatistica_data BETWEEN DATE_ADD(CURRENT_DATE, INTERVAL -1 MONTH) AND CURRENT_DATE;";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
		
	}
	
	function select_dadosTotais(){
		try {
			$sql 	= "	SELECT aco.seq_acompanhante,SUM(num_estatistica_acesso) total,aco.dsc_acompanhante_nome_artistico, dat_data_cadastro
						FROM adm_estatistica estat
						inner join adm_acompanhante aco on estat.seq_acompanhante=aco.seq_acompanhante
						WHERE aco.flg_acompanhante_ativo='1'
						AND dat_estatistica_data BETWEEN DATE_ADD(CURRENT_DATE, INTERVAL -1 MONTH) AND CURRENT_DATE
						group by aco.seq_acompanhante,dsc_acompanhante_nome_artistico, dat_data_cadastro
						order by total desc;";
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