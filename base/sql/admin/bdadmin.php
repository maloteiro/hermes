<?php
class bdadmin{
	function bdadmin($db){
		$this->db = $db;
	}
	
	function select_PermissoesModulo($perfil){
		$sql 	= "	SELECT DISTINCT mo.* 
					FROM seg_modulo mo
					LEFT JOIN seg_rotina rot ON mo.seq_modulo=rot.seq_modulo
					LEFT JOIN seg_permissao per ON rot.seq_modulo=mo.seq_modulo
					AND mo.flg_modulo_ativo='S'
					AND per.seq_perfil='".$perfil."'
					ORDER BY mo.num_modulo_ordem;";
		//echo "<pre>"; print_r($sql); "</pre>"; die();					
		$q = $this->db->execute($sql);		
		$res = $q->getRows();
		return $res;
	}
	
	function select_PermissoesRotina($modulo, $perfil){
		$sql 	= "	SELECT DISTINCT rot.*, IFNULL(per.seq_rotina,0) marcar 
					FROM seg_rotina rot
					LEFT JOIN seg_permissao per ON rot.seq_rotina=per.seq_rotina					
					AND per.seq_perfil='".$perfil."'
					WHERE rot.seq_modulo='".$modulo."'
					ORDER BY rot.num_rotina_ordem;";
		//echo "<pre>"; print_r($sql); "</pre>"; die();					
		$q = $this->db->execute($sql);
		//echo "<pre>"; print_r($sql); "</pre>"; die();
		$res = $q->getRows();
		return $res;
	}
	
	function select_PermissoesPerfil(){
		$sql 	= "	SELECT * 
					FROM seg_perfil
					where flg_perfil_ativo='S';";
		//echo "<pre>"; print_r($sql); "</pre>"; die();							
		$q = $this->db->execute($sql);		
		$res = $q->getRows();
		return $res;
	}
	
	function select_RotinaModulo(){
		$sql 	= "	SELECT * 
					FROM seg_modulo
					where flg_modulo_ativo='S';";							
		$q = $this->db->execute($sql);		
		$res = $q->getRows();
		return $res;
	}
	
	function delete_PermissoesPerfil($parametros){
		try {
		   $sql = "
					DELETE FROM seg_permissao
					WHERE seq_perfil='".$parametros['seq_perfil']."'; 
					 ";
			//echo "<pre>".$sql."</pre>"; exit;
			$res = $this->db->execute($sql) ;
			return true;			
		} catch (Exception $e) {
			return false;
		}
	}
	
	function insert_PermissoesPerfil($parametros){
		try {
			$sql = "insert into seg_permissao (seq_rotina, seq_perfil) values ('".$parametros['seq_rotina']."','".$parametros['seq_perfil']."');";
			//echo "<pre>".$sql."</pre>"; exit;
			$res = $this->db->execute($sql) ;
			return true;			
		} catch (Exception $e) {
			return false;
		}
	}
	
	function select_validaRotina($parametros){
		try {
			$sql 	= "	SELECT * 
					FROM seg_rotina
					where seq_modulo='".$parametros['seq_modulo']."'
					and dsc_rotina_descricao='".$parametros['dsc_rotina_descricao']."'
					and dsc_rotina_arquivo='".$parametros['dsc_rotina_arquivo']."'
					and dsc_rotina_diretorio='".$parametros['dsc_rotina_diretorio']."'
					and dsc_rotina_funcao='".$parametros['dsc_rotina_funcao']."';";
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
	
	function select_dadosRotinas($seq_rotina=""){
		try {
			$sql 	= "	SELECT rot.*, mo.dsc_modulo_descricao 
					FROM seg_rotina rot
					inner join seg_modulo mo on rot.seq_modulo=mo.seq_modulo
					where seq_rotina='".$seq_rotina."' or '-1'='".$seq_rotina."';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	
	
	
	function insert_Rotina($parametros){
		try {
			$sql 	= "INSERT INTO `seg_rotina`						         
						       (`seq_modulo`,
						        `dsc_rotina_descricao`,
						        `dsc_rotina_arquivo`,
						        `dsc_rotina_diretorio`,
						        `dsc_rotina_funcao`,
						        `num_rotina_ordem`,
						        `flg_rotina_ativa`)
						VALUES ('".$parametros['seq_modulo']."',
						        '".utf8_decode($parametros['dsc_rotina_descricao'])."',
						        '".utf8_decode($parametros['dsc_rotina_arquivo'])."',
						        '".utf8_decode($parametros['dsc_rotina_diretorio'])."',
						        '".utf8_decode($parametros['dsc_rotina_funcao'])."',
						        '0".$parametros['num_rotina_ordem']."',
						        '".$parametros['flg_rotina_ativa']."');";
			//echo $sql;							
			$q = $this->db->execute($sql);			
			return $this->db->Insert_ID();				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function update_Rotina($parametros){
		try {
			$sql 	= "UPDATE `seg_rotina`	SET					         
						        `seq_modulo`			='".$parametros['seq_modulo']."',
						        `dsc_rotina_descricao`	='".utf8_decode($parametros['dsc_rotina_descricao'])."',
						        `dsc_rotina_arquivo`	='".utf8_decode($parametros['dsc_rotina_arquivo'])."',
						        `dsc_rotina_diretorio`	='".utf8_decode($parametros['dsc_rotina_diretorio'])."',
						        `dsc_rotina_funcao`		='".utf8_decode($parametros['dsc_rotina_funcao'])."',
						        `num_rotina_ordem`		='".$parametros['num_rotina_ordem']."',
						        `flg_rotina_ativa`		='".$parametros['flg_rotina_ativa']."'
						WHERE seq_rotina='".$parametros['seq_rotina']."'
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
	
	
	
	
	
	
	
	
	
	
	
	function select_validaPerfil($parametros){
		try {
			$sql 	= "	SELECT * 
					FROM seg_perfil
					where dsc_perfil_nome='".$parametros['dsc_perfil_nome']."'
					and dsc_perfil_nome='".$parametros['dsc_perfil_nome']."'
					and flg_perfil_ativo='".$parametros['flg_perfil_ativo']."';";
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
	
	function select_dadosPerfis($seq_perfil=""){
		try {
			$sql 	= "	SELECT * 
					FROM seg_perfil 
					where seq_perfil='".$seq_perfil."' or '-1'='".$seq_perfil."';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	
	
	
	function insert_Perfil($parametros){
		try {
			$sql 	= "INSERT INTO `seg_perfil`						         
						       (`dsc_perfil_nome`,
						        `sig_perfil_sigla`,
						        `flg_perfil_ativo`,
						        `dat_data_cadastro`,
						        `seq_usuario_cadastro`)
						VALUES (upper('".utf8_decode($parametros['dsc_perfil_nome'])."'),
						        upper('".utf8_decode($parametros['sig_perfil_sigla'])."'),						        
						        '".$parametros['flg_perfil_ativo']."',
						        now(),
						        '".$_SESSION['seq_usuario']."');";
			//echo $sql;							
			$q = $this->db->execute($sql);			
			return $this->db->Insert_ID();				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function update_Perfil($parametros){
		try {
			$sql 	= "UPDATE `seg_perfil`	SET					         
						        `dsc_perfil_nome`		=UPPER('".utf8_decode($parametros['dsc_perfil_nome'])."'),
						        `sig_perfil_sigla`		=UPPER('".utf8_decode($parametros['sig_perfil_sigla'])."'),						        
						        `flg_perfil_ativo`		='".$parametros['flg_perfil_ativo']."',
						        `dat_data_alteracao`	=now(),
						        `seq_usuario_alteracao`		='".$_SESSION['seq_usuario']."'
						        
						WHERE seq_perfil='".$parametros['seq_perfil']."'
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
	
	
	
	
	
	
	
	
	function select_validaModulo($parametros){
		try {
			$sql 	= "	SELECT * 
						FROM seg_modulo
						where dsc_modulo_descricao='".utf8_decode($parametros['dsc_modulo_descricao'])."'
						and flg_modulo_ativo='".$parametros['flg_modulo_ativo']."';";
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
	
	function select_dadosModulos($seq_modulo=""){
		try {
			$sql 	= "	SELECT * 
					FROM seg_modulo 
					where seq_modulo='".$seq_modulo."' or '-1'='".$seq_modulo."';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	
	
	
	function insert_Modulo($parametros){
		try {
			$sql 	= "INSERT INTO `seg_modulo`						         
						       (`dsc_modulo_descricao`,
						        `flg_modulo_ativo`,
						        `num_modulo_ordem`								)
						VALUES ('".utf8_decode($parametros['dsc_modulo_descricao'])."',
						        '".$parametros['flg_modulo_ativo']."',						        
						        '0".$parametros['num_modulo_ordem']."');";
			//echo $sql;							
			$q = $this->db->execute($sql);			
			return $this->db->Insert_ID();				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function update_Modulo($parametros){
		try {
			$sql 	= "UPDATE `seg_modulo`	SET				         
						        `dsc_modulo_descricao`	= '".utf8_decode($parametros['dsc_modulo_descricao'])."',						       					        
						        `flg_modulo_ativo`		= '".$parametros['flg_modulo_ativo']."',
						        `num_modulo_ordem`		= '0".$parametros['num_modulo_ordem']."'						        
						WHERE seq_modulo='".$parametros['seq_modulo']."'
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
	
	
	
	
	
	
	
	
	
	
	
	
	/*function select_validaOrgao($parametros){
		try {
			$sql 	= "	SELECT * 
						FROM orgao
						where dsc_orgao		='".utf8_decode($parametros['dsc_orgao'])."'
						and seq_perfil		='".$parametros['seq_perfil']."'
						and tip_orgao_tipo	='".$parametros['tip_orgao_tipo']."'
						and sig_orgao_sigla ='".utf8_decode($parametros['tip_orgao_tipo'])."';";
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
	
	function select_dadosOrgaos($seq_orgao=""){
		try {
			$sql 	= "	SELECT per.*
						FROM seg_perfil per 
						WHERE seq_perfil='".$seq_orgao."' or '-1'='".$seq_orgao."';";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	
	
	
	function insert_Orgao($parametros){
		try {
			$sql 	= "INSERT INTO `orgao`						         
						       (`dsc_orgao`,
						        `flg_orgao_status`,
						        `sig_orgao_sigla`,
						        `tip_orgao_tipo`,
						        `seq_perfil`,
						        `dat_data_cadastro`,
						        `seq_usuario_cadastro`
								)
						VALUES ('".utf8_decode($parametros['dsc_orgao'])."',
						        '".$parametros['flg_orgao_status']."',						        
						        '".utf8_decode($parametros['sig_orgao_sigla'])."',
								'".utf8_decode($parametros['tip_orgao_tipo'])."',
								'".$parametros['seq_perfil']."',
								now(),
						        '".$_SESSION['seq_usuario']."');";
			//echo $sql;							
			$q = $this->db->execute($sql);			
			return $this->db->Insert_ID();				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function update_Orgao($parametros){
		try {
			$sql 	= "UPDATE `orgao`	SET				         
						        `dsc_orgao`				= '".utf8_decode($parametros['dsc_orgao'])."',						       					        
						        `flg_orgao_status`		= '".$parametros['flg_orgao_status']."',
						        `sig_orgao_sigla`		= '".utf8_decode($parametros['sig_orgao_sigla'])."',
						        `tip_orgao_tipo`		= '".utf8_decode($parametros['tip_orgao_tipo'])."',
						        `seq_perfil`			= '".$parametros['seq_perfil']."',
						        `dat_data_alteracao`	= now(),
						        `seq_usuario_alteracao`	= '".$_SESSION['seq_usuario']."'						        
						WHERE seq_orgao='".$parametros['seq_orgao']."'
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
	} */
	
	function select_validaUsuario($parametros){
		try {
			$sql 	= "	SELECT * 
						FROM seg_usuario
						where dsc_usuario_nome		='".utf8_decode($parametros['dsc_usuario_nome'])."'
						and seq_perfil		='".$parametros['seq_perfil']."'
						and dsc_usuario_email	='".utf8_decode($parametros['dsc_usuario_email'])."';";
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
	
	function select_dadosUsuarios($seq_usuario=""){
		$where = $_SESSION['seq_perfil'] == 1 ? "" : " and seq_empresa='".$_SESSION['seq_empresa']."' and usu.seq_perfil>='".$_SESSION['seq_perfil']."'";	
		
		try {
			$sql 	= "	SELECT usu.*, per.dsc_perfil_nome
						FROM seg_usuario usu
						INNER JOIN seg_perfil per ON usu.seq_perfil=per.seq_perfil 
						WHERE (seq_usuario='".$seq_usuario."' or '-1'='".$seq_usuario."') ".$where.";";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	
	
	
	function insert_Usuario($parametros){
		try {
			$sql 	= "INSERT INTO `seg_usuario`						         
						       (seq_perfil,						        
	  						    dsc_usuario_senha,
							   	`dsc_usuario_nome`,
								dsc_usuario_cpf,
								`dsc_usuario_email`,
								`dsc_usuario_email2`,								
								`num_usuario_telefone`,								
						        `flg_usuario_ativo`,						        
						        `dat_data_cadastro`,
						        `seq_usuario_cadastro`
								)
						VALUES ('".$parametros['seq_perfil']."',								
						        md5('102030'),
								'".utf8_decode($parametros['dsc_usuario_nome'])."',
								'".$this->rc($parametros['dsc_usuario_cpf'])."',
								'".utf8_decode($parametros['dsc_usuario_email'])."',
								'".utf8_decode($parametros['dsc_usuario_email2'])."',
								'".$this->rc($parametros['num_usuario_telefone'])."',
						        '".$parametros['flg_usuario_ativo']."',						        
								now(),
						        '".$_SESSION['seq_usuario']."');";
			//echo $sql;							
			$q = $this->db->execute($sql);			
			return $this->db->Insert_ID();				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function update_Usuario($parametros){
		try {
			
			
			if($parametros['dsc_usuario_senha']!=""){
				//print_r($parametros);
		    	$senha = "dsc_usuario_senha=md5('".$parametros['dsc_usuario_senha']."'),";
			}
			$sql 	= "UPDATE `seg_usuario`	SET				         
						        `dsc_usuario_nome`		= '".utf8_decode($parametros['dsc_usuario_nome'])."',						       					        
						        `flg_usuario_ativo`	= '".$parametros['flg_usuario_ativo']."',
						        `seq_perfil`			= '".$parametros['seq_perfil']."',						        
								`dsc_usuario_email`		='".utf8_decode($parametros['dsc_usuario_email'])."',
								`dsc_usuario_email2`	='".utf8_decode($parametros['dsc_usuario_email2'])."',
								`num_usuario_telefone`	='".$this->rc($parametros['num_usuario_telefone'])."',
								".$senha."
						        `dat_data_alteracao`	= now(),
						        `seq_usuario_alteracao`	= '".$_SESSION['seq_usuario']."'						        
						WHERE seq_usuario='".$parametros['seq_usuario']."'
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
	
	function rc($valor){
		return str_replace(' ','',str_replace(')','',str_replace('(','',str_replace(',','',str_replace('.','',str_replace('-','',$valor))))));
	}
}
?>