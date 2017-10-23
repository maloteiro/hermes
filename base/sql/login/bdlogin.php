<?php
class bdlogin{
	function bdlogin($db){
        $this->db = $db;
	}
	
	function validarAcesso($parametros){
		try {
			$sql = "SELECT us.*, dsc_perfil_nome, sig_perfil_sigla 
					FROM seg_usuario us
					INNER JOIN seg_perfil pe ON us.seq_perfil=pe.seq_perfil					
					WHERE dsc_usuario_email='".$parametros['usuario']."' and dsc_usuario_senha=md5('".$parametros['senha']."')
					and pe.flg_perfil_ativo='S'
					and us.flg_usuario_ativo='S'";
			//echo "<pre>"; print_r($sql); "</pre>"; die();
			$q = $this->db->execute($sql);
			$res = $q->getRows();
			return $res;
		} 
		catch (Exception $e) {
			return false;
		}
	}
	
	function select_senhaFraca($Senha){
		$sql 	= " SELECT * 
					FROM seg_senha_fraca
					WHERE dsc_senha='".$Senha."';
		 	      ";
		$q = $this->db->execute($sql);
		//echo "<pre>"; print_r($sql); "</pre>"; die();
		$res = $q->getRows();
		return $res;
	}
	
	function select_verificarSenha($dsc_usuario_email,$senha){
		$sql 	= " SELECT 	us.seq_usuario, 
							us.dsc_usuario_cpf,
							us.dsc_usuario_nome,
							us.dsc_usuario_email, 
							us.dsc_usuario_email2, 
							us.seq_perfil,
							pe.dsc_perfil_nome,
							us.dsc_usuario_senha
					FROM seg_usuario us
					inner join seg_perfil pe on us.seq_perfil=pe.seq_perfil					
					WHERE us.dsc_usuario_email  		= '".$dsc_usuario_email."'  
						AND   us.dsc_usuario_senha  = md5('".$senha."')
						AND   us.flg_usuario_ativo = 'S';
		 	      ";
		$q = $this->db->execute($sql);
		//echo "<pre>"; print_r($sql); "</pre>"; die();
		$res = $q->getRows();
		return $res;
	}
	
	
	
	function update_alterarSenha($parametros){
		try {
		   $sql = "
		   		 UPDATE seg_usuario  SET  								
  								dsc_usuario_senha 		='".md5($parametros['nova_senha'])."'
					  WHERE 	seq_usuario  			= '".$_SESSION['seq_usuario']."' ";
			
			//echo "<pre>".$sql."</pre>"; exit;
			$res = $this->db->execute($sql) ;
			return true;			
		} 
		
		catch (Exception $e) {
			return false;
		}
	}
}
?>