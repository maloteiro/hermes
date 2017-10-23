<?php
class bdcliente{
	function bdcliente($db){
		$this->db = $db;
	}
	
	function select_validaCadastro($parametros){
		try {
			$sql 	= "	SELECT * 
					FROM tbl_cliente
					where nom_cliente_nome_razao	='".$parametros['nom_cliente_nome_razao']."'
					and dsc_cliente_email		='".$parametros['dsc_cliente_email']."'
					and ind_estado_civil		='".$parametros['ind_estado_civil']."'
					and flg_cliente_ativo		='".$parametros['flg_cliente_ativo']."';";
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
	
	function select_carregaEntrevista($seq_cliente="",$sequencial="-1"){
		try {
			$sql 	= "	SELECT 	`seq_entrevista`, 
                                                `seq_cliente`, 
                                                `dsc_entrevista_pergunta`, 
                                                `dsc_entrevista_resposta`, 
                                                `flg_entrevista_ativa`,
                                                `seq_usuario_cadastro`, 
                                                `dat_data_cadastro`, 
                                                `seq_usuario_alteracao`, 
                                                `dat_data_alteracao`, 
                                                `cod_token_codigo`

                                        FROM `tbl_entrevista`
					WHERE seq_cliente='".$seq_cliente."'
                                                AND (seq_entrevista='".$sequencial."' OR '-1'='".$sequencial."');";
			//echo $sql;							
			$q = $this->db->execute($sql);		
			$res = $q->getRows();
			return $res;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function select_carregaArtefato($seq_cliente="",$sequencial="-1"){
		try {
			$sql 	= "SELECT 	`seq_artefato`, 
								`seq_cliente`, 
								`dsc_artefato_nome`, 
								`dsc_artefato_descricao`,
								num_artefato_tamanho as num_artefato_tamanho_original,
								txt_artefato_conteudo,
								CASE WHEN  num_artefato_tamanho>1024
								THEN  
									CASE WHEN  (num_artefato_tamanho/1024)>1024 THEN CONCAT(ROUND((num_artefato_tamanho/1024)/1024,2),' MB')
									     ELSE CONCAT(ROUND(num_artefato_tamanho/1024,2),' KB')
									END 
								ELSE CONCAT(num_artefato_tamanho,' byte(s)') END num_artefato_tamanho, 
								`dsc_artefato_extensao`,
								flg_artefato_ativo, 
								`dat_data_cadastro`, 
								`seq_usuario_cadastro`, 
								`dat_data_alteracao`, 
								`seq_usuario_alteracao`, 
								`cod_token_codigo`
								 
					FROM 		`tbl_artefato` 
					WHERE seq_cliente='".$seq_cliente."'
                          AND (seq_artefato='".$sequencial."' OR '-1'='".$sequencial."');";
			//echo $sql;
			//exit;							
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
						FROM tbl_cliente
						WHERE seq_cliente='".$sequencial."' or '-1'='".$sequencial."';";
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
			$sql 	= "UPDATE `tbl_cliente` 
							SET
							 
							`ind_estado_civil` 		= '".$parametros['ind_estado_civil']."', 
							`nom_cliente_nome_razao`	= '".$parametros['nom_cliente_nome_razao']."', 
							`dsc_cliente_email` 		= '".$parametros['dsc_cliente_email']."', 
							`dsc_cliente_rg_ie` 		= '".$parametros['dsc_cliente_rg_ie']."', 
							`dsc_cliente_expedidor` 	= '".$parametros['dsc_cliente_expedidor']."', 
							`dsc_cliente_cpf_cnpj` 		= '".$parametros['dsc_cliente_cpf_cnpj']."' , 
							`num_cliente_telefone` 		= '".$parametros['num_cliente_telefone']."' , 
							`num_cliente_telefone2` 	= '".$parametros['num_cliente_telefone2']."' , 
							`mum_cliente_celular` 		= '".$parametros['mum_cliente_celular']."' , 
							`dsc_cliente_logradouro` 	= '".$parametros['dsc_cliente_logradouro']."' , 
							`dsc_cliente_bairro` 		= '".$parametros['dsc_cliente_bairro']."' , 
							`dsc_cliente_cidade` 		= '".$parametros['dsc_cliente_cidade']."' , 
							`dsc_cliente_cep` 		= '".$parametros['dsc_cliente_cep']."' , 
							`dat_cliente_nascimento` 	= '".dateformartANSI($parametros['dat_cliente_nascimento'])."' , 
							`txt_cliente_observacoes` 	= '".$parametros['txt_cliente_observacoes']."' , 
							`flg_cliente_ativo` 		= '".$parametros['flg_cliente_ativo']."', 
							`dat_data_alteracao` 		= now(), 
							`seq_usuario_alteracao` 	= '".$_SESSION['seq_usuario']."', 
							`cod_token_codigo` 		= '".$_SESSION['token']."'
							
							WHERE
							`seq_cliente` = '".$parametros['seq_cliente']."'";
			//echo $sql;							
                        //exit;
			$q = $this->db->execute($sql);			
			return true;				
		} catch (Exception $e) {
			return false;
		}
	}	
	
	function insert_Cadastro($parametros){
		try {
			$sql 	= "INSERT INTO `tbl_cliente` ( 
								tip_cliente_tipo,
								`ind_estado_civil`, 
								`nom_cliente_nome_razao`, 
								`dsc_cliente_email`, 
								`dsc_cliente_rg_ie`, 
								`dsc_cliente_expedidor`, 
								`dsc_cliente_cpf_cnpj`, 
								`num_cliente_telefone`, 
								`num_cliente_telefone2`, 
								`mum_cliente_celular`, 
								`dsc_cliente_logradouro`, 
								`dsc_cliente_bairro`, 
								`dsc_cliente_cidade`, 
								`dsc_cliente_cep`, 
								`dat_cliente_nascimento`, 
								`txt_cliente_observacoes`, 
								`flg_cliente_ativo`, 
								`dat_data_cadastro`, 
								`seq_usuario_cadastro`, 
								`cod_token_codigo`
							) VALUES (
								'".$parametros['tip_cliente_tipo']."',
								'".$parametros['ind_estado_civil']."', 
								'".$parametros['nom_cliente_nome_razao']."', 
								'".$parametros['dsc_cliente_email']."', 
								'".$parametros['dsc_cliente_rg_ie']."', 
								'".$parametros['dsc_cliente_expedidor']."', 
								'".$parametros['dsc_cliente_cpf_cnpj']."' , 
								'".$parametros['num_cliente_telefone']."' , 
								'".$parametros['num_cliente_telefone2']."' , 
								'".$parametros['mum_cliente_celular']."' , 
								'".$parametros['dsc_cliente_logradouro']."' , 
								'".$parametros['dsc_cliente_bairro']."' , 
								'".$parametros['dsc_cliente_cidade']."' , 
								'".$parametros['dsc_cliente_cep']."' , 
								'".dateformartANSI($parametros['dat_cliente_nascimento'])."' ,
								'".$parametros['txt_cliente_observacoes']."' , 
								'".$parametros['flg_cliente_ativo']."', 
								now(), 
								'".$_SESSION['seq_usuario']."', 
								'".$_SESSION['token']."'
							);
						";
			//echo "<pre>";
			//echo $sql;	
			//exit;						
			$q = $this->db->execute($sql);			
			return $this->db->Insert_ID();				
		} catch (Exception $e) {
			return false;
		}
	}
        
    function insert_CadastroEntrevista($parametros){
		try {
			$sql 	= "INSERT INTO `tbl_entrevista` 
                                    (
                                    `seq_cliente`, 
                                    `dsc_entrevista_pergunta`, 
                                    `dsc_entrevista_resposta`, 
                                    `flg_entrevista_ativa`, 
                                    `seq_usuario_cadastro`, 
                                    `dat_data_cadastro`, 
                                    `cod_token_codigo`
                                    ) VALUES (
                                    '".$parametros['seq_cliente']."', 
                                    '".$parametros['dsc_entrevista_pergunta']."', 
                                    '".$parametros['dsc_entrevista_resposta']."', 
                                    '".$parametros['flg_entrevista_ativa']."', 
                                    '".$_SESSION['seq_usuario']."', 
                                    now(), 
                                    '".$_SESSION['token']."'
                                    );";
			//echo "<pre>";
			//echo $sql;	
			//exit;						
			$q = $this->db->execute($sql);			
			return $this->db->Insert_ID();				
		} catch (Exception $e) {
			return false;
		}
	}
        
	function update_CadastroEntrevista($parametros){
		try {
			$sql 	= "UPDATE   `tbl_entrevista` 
                            SET							 
							`dsc_entrevista_pergunta`       = '".$parametros['dsc_entrevista_pergunta']."', 
							`dsc_entrevista_resposta` 	= '".$parametros['dsc_entrevista_resposta']."', 
                            `flg_entrevista_ativa`          = '".$parametros['flg_entrevista_ativa']."',             
							`dat_data_alteracao` 		= now(), 
							`seq_usuario_alteracao` 	= '".$_SESSION['seq_usuario']."'							
                             WHERE
							`seq_entrevista` = '".$parametros['seq_entrevista']."'";
			//echo $sql;							
			$q = $this->db->execute($sql);			
			return true;				
		} catch (Exception $e) {
			return false;
		}
	}
	
	function insert_CadastroArtefato($parametros){
		try {
			$sql 	= "INSERT INTO `tbl_artefato` 
                                    (
                                    `seq_cliente`, 
                                    `dsc_artefato_nome`, 
                                    `dsc_artefato_descricao`,
                                    txt_artefato_conteudo,
                                    `dsc_artefato_extensao`,
                                    `num_artefato_tamanho`,
                                    `tip_artefato_tipo`, 
                                    `flg_artefato_ativo`, 
                                    `seq_usuario_cadastro`, 
                                    `dat_data_cadastro`, 
                                    `cod_token_codigo`
                                    ) VALUES (
                                    '".$parametros['seq_cliente']."', 
                                    '".$parametros['dsc_artefato_nome']."',
                                    '".$parametros['dsc_artefato_descricao']."',
                                    '".$parametros['txt_artefato_conteudo']."',
                                    '".$parametros['dsc_artefato_extensao']."', 
                                    '".$parametros['num_artefato_tamanho']."',
                                    '".$parametros['tip_artefato_tipo']."',
                                    '".$parametros['flg_artefato_ativo']."', 
                                    '".$_SESSION['seq_usuario']."', 
                                    now(), 
                                    '".$_SESSION['token']."'
                                    );";
			//echo "<pre>";
			//echo $sql;	
			//exit;						
			$q = $this->db->execute($sql);			
			return $this->db->Insert_ID();				
		} catch (Exception $e) {
			return false;
		}
	}
	
	
	function update_CadastroArtefato($parametros){
		try {
			$sql 	= "UPDATE   `tbl_artefato` 
                            SET							 
							`dsc_artefato_nome`      	= '".$parametros['dsc_artefato_nome']."', 
							`dsc_artefato_descricao` 	= '".$parametros['dsc_artefato_descricao']."',
							txt_artefato_conteudo		= '".$parametros['txt_artefato_conteudo']."', 
                            `flg_artefato_ativo`		= '".$parametros['flg_artefato_ativo']."',
                            `dsc_artefato_extensao`		= '".$parametros['dsc_artefato_extensao']."', 
                            `num_artefato_tamanho`		= '".$parametros['num_artefato_tamanho']."',
                            `tip_artefato_tipo`			= '".$parametros['tip_artefato_tipo']."',            
							`dat_data_alteracao` 		= now(),
							`seq_usuario_alteracao` 	= '".$_SESSION['seq_usuario']."'							
                             WHERE
							`seq_artefato` = '".$parametros['seq_artefato']."'";
			//echo $sql;							
			$q = $this->db->execute($sql);			
			return true;				
		} catch (Exception $e) {
			return false;
		}
	}
}
?>