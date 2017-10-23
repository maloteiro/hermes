<?php
class bdindex{
	function bdindex($db){
		$this->db = $db;
	}
	
	/*
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
	
	/*function select_andamento(){
		$sql 	= " SELECT (
							SELECT  COUNT(pro.seq_processo) 
							FROM  	processo pro
							WHERE  pro.flg_processo_situacao = '1'
							) pendente,
							(
									SELECT  COUNT(pro.seq_processo) 
									FROM  	processo pro
									WHERE  pro.flg_processo_situacao = '2'
							) nao_incluido,
							(
									SELECT  COUNT(pro.seq_processo) 
									FROM  	processo pro
									WHERE  pro.flg_processo_situacao = '3'
							) em_andamento,
							(
									SELECT  COUNT(pro.seq_processo) 
									FROM  	processo pro
									WHERE  pro.flg_processo_situacao = '4'
							) suspenso,
							(
									SELECT  COUNT(pro.seq_processo) 
									FROM  	processo pro
									WHERE  pro.flg_processo_situacao = '5'
							) finalizado,
							(
									SELECT  COUNT(pro.seq_processo) 
									FROM  	processo pro
									WHERE  pro.flg_processo_situacao = '6'
							) excluido
				";
		$q = $this->db->execute($sql);
		//echo "<pre>"; print_r($sql); "</pre>"; die();
		$res = $q->getRows();
		return $res;
	}*/
}
