<?php	

/***** Classe para busca as configura��es do sistemas e adicion�-las a SESS�O *****/

	class parametros{				
	    function parametros($db)	{
	        $this->db = $db;
		}
		
		function carregar(){
			$sql 	= " 
						SELECT 		seq_configuracao,
									nom_configuracao_parametro,
									dsc_configuracao_valor												
							FROM 	cfg_configuracoes; ";
			
			$q = $this->db->execute($sql);
			//echo "<pre>"; print_r($sql); "</pre>"; die();
			$res = $q->getRows();
			
			foreach($res as $param){
				$_SESSION[$param['nom_configuracao_parametro']] = $param['dsc_configuracao_valor'];
			}
			return true;
		}
	}
	
	$parametros = new parametros($db);
	$parametros->carregar();
	
?>