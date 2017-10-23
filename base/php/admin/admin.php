<?php
class admin{
	private $db;
	private $smarty;
	private $token;
	private $sql;
	private $aux;
	
	function __construct($classes){
		$this->db 		= $classes['db'];
		$this->smarty 	= $classes['smarty'];
		$this->token 	= $classes['token'];
		$this->sql		= $classes['sql'];		
		$this->aux		= $classes['aux'];
	}
	
	function formRotina(){
		permissao($_POST);
		
		$this->smarty->assign('modulos',$this->sql->select_RotinaModulo());		
		$dados = $this->sql->select_dadosRotinas($_POST['seq_rotina']);
		if($dados){
			$this->smarty->assign('dadosRotina',$dados[0]);
			$this->smarty->assign('update',"S");
		}else{
			$this->smarty->assign('update',"N");
		}
				
		
		return true;
	}
	
	function consultaRotina(){
		$dados = $this->sql->select_dadosRotinas("-1");
		$this->smarty->assign('rotinas',$dados);
		return true;
	}
	
	
	
	
	function formPermissao(){		
		permissao($_POST);
		$this->smarty->assign('perfis',$this->sql->select_PermissoesPerfil());		
		return true;		
	}
	
	function ajaxPermissao(){
		permissao($_POST);
		$modulos = $this->sql->select_PermissoesModulo($_POST['seq_perfil']);
		$permissao 	= "";
		$inativo 	= "";
		$flg_moduloinativo=false;
		$moduloinativo = false;
		 
		foreach ($modulos as $modulo) {
			if($modulo['flg_modulo_ativo']=="N"){
				$moduloinativo=true;
				$flg_moduloinativo = "disabled='true'";
				$inativo = " - <font color='red'>Inativo</font>";
			}else{
				$flg_inativo = "";
				$inativo = "";
			}
			$permissao .= '<div class="div-box-modulos"><p class="text-muted well well-sm no-shadow" style="margin-top: 5px;margin-bottom: 5px;">'.$modulo['dsc_modulo_descricao'].' '.$inativo.'</p></div>';
			$rotinas = $this->sql->select_PermissoesRotina($modulo['seq_modulo'],$_POST['seq_perfil']);
			if($rotinas){				
				foreach ($rotinas as $rotina) {
					if($rotina['flg_rotina_ativa']=="N"){
						$flg_inativo = "disabled='true'";
						$inativo = " - <font color='red'>Inativa</font>";
					}else{
						$flg_inativo = "";
						$inativo = "";
					}
					
					
					if($rotina['marcar']>0){
						$marcar="checked";
					}else{
						$marcar="";
					}
					$imprimir = "";
					if($moduloinativo){
						$imprimir = $flg_moduloinativo;
					}else{
						$imprimir = $flg_inativo;
					}
					$permissao .= '<div class="row"><div class="form-group col-xs-2"><input type="checkbox" class="check-box-rotinas required minimal" id="seq_rotina[]" name="seq_rotina[]" value="'.$rotina['seq_rotina'].'" '.$marcar.' '.$imprimir.'>'.$rotina['dsc_rotina_descricao'].'  ('.$rotina['dsc_rotina_funcao'].')'.$inativo.'</div></div>';	
				}				
			}
		}
		//echo $permissao;		
		$this->smarty->assign('permissao',$permissao);
		echo $this->smarty->fetch('./base/html/admin/admin_ajaxPermissao.html');
        exit;
	}

	function ajaxConsultaRotina(){
		exit;
		return true;
	}

	function salvarRotina(){
		try {
			permissao($_POST);
			
			if(!$_POST['flg_rotina_ativa']) $_POST['flg_rotina_ativa']='N'; 
			//print_r($_POST);
			//exit;		
			if($this->sql->select_validaRotina($_POST) && $_POST['update']=="N"){
				throw new Exception("Erro. <a href='#'>Não foi possível gravar os dados, os dados informados estão duplicados.</a>");				
			}else{
				if($_POST['update']=="S"){
					$id = $_POST['seq_rotina'];	
					$this->sql->update_Rotina($_POST);	
				}else{
					//print_r($_POST);
					//exit;					
					$id = $this->sql->insert_Rotina($_POST);
				}				
			}
			echo "Dados gravados com sucesso";
			echo "<input type='hidden' name='tmp_seq_rotina' id='tmp_seq_rotina' value='".$id."'/>";
			//print_r($_POST);
			exit;
		} catch (Exception $e) {			
			echo "Erro. <a href='#'>".$e->getMessage()."</a>";			
			exit;			
		}		
	}
	
	function salvarPermissao(){
		permissao($_POST);
		
		if($this->sql->delete_PermissoesPerfil($_POST)){
			foreach ($_POST['seq_rotina'] as $rotina) {
				$parametros['seq_rotina'] = $rotina;
				$parametros['seq_perfil'] = $_POST['seq_perfil'];
				$this->sql->insert_PermissoesPerfil($parametros);
			}
			echo "Dados gravados com sucesso.";
		}else{
			echo "Não foi possível gravar os dados.";	
		}
		
		//print_r($_POST);
		exit;
	}
	
	
	
	
	
	
	
	
	
	
	function formPerfil(){
		//print_r($_SESSION);
		permissao($_POST);
		//$this->smarty->assign('modulos',$this->sql->select_RotinaModulo());		
		$dados = $this->sql->select_dadosPerfis($_POST['seq_perfil']);
		if($dados){
			$this->smarty->assign('dados',$dados[0]);
			$this->smarty->assign('update',"S");
		}else{
			$this->smarty->assign('update',"N");
		}
				
		
		return true;
	}
	
	function consultaPerfil(){
		$dados = $this->sql->select_dadosPerfis("-1");
		$this->smarty->assign('dados',$dados);
		return true;
	}
	
	function salvarPerfil(){
		try {
			permissao($_POST);
			
			if(!$_POST['flg_perfil_ativo']) $_POST['flg_perfil_ativo']='N'; 
					
			if($this->sql->select_validaPerfil($_POST) && $_POST['update']=="N"){
				throw new Exception("Erro. <a href='#'>Não foi possível gravar os dados, os dados informados estão duplicados.</a>");				
			}else{
				if($_POST['update']=="S"){
					$id = $_POST['seq_perfil'];	
					$this->sql->update_Perfil($_POST);	
				}else{					
					$id = $this->sql->insert_Perfil($_POST);
				}				
			}
			echo "Dados gravados com sucesso";
			echo "<input type='hidden' name='tmp_seq_perfil' id='tmp_seq_perfil' value='".$id."'/>";
			//print_r($_POST);
			exit;
		} catch (Exception $e) {			
			echo "Erro. <a href='#'>".$e->getMessage()."</a>";			
			exit;			
		}		
	}
	
	
	
	
	
	
	
	function formModulo(){
		//print_r($_SESSION);
		permissao($_POST);
				
		$dados = $this->sql->select_dadosModulos($_POST['seq_modulo']);
		if($dados){
			$this->smarty->assign('dados',$dados[0]);
			$this->smarty->assign('update',"S");
		}else{
			$this->smarty->assign('update',"N");
		}				
		
		return true;
	}
	
	function consultaModulo(){
		$dados = $this->sql->select_dadosModulos("-1");
		$this->smarty->assign('dados',$dados);		
		return true;
	}
	
	function salvarModulo(){
		try {
			permissao($_POST);
			
			if(!$_POST['flg_modulo_ativo']) $_POST['flg_modulo_ativo']='N'; 
					
			if($this->sql->select_validaModulo($_POST) && $_POST['update']=="N"){
				throw new Exception("Erro. <a href='#'>Não foi possível gravar os dados, os dados informados estão duplicados.</a>");				
			}else{
				if($_POST['update']=="S"){
					$id = $_POST['seq_modulo'];	
					$this->sql->update_Modulo($_POST);	
				}else{					
					$id = $this->sql->insert_Modulo($_POST);
				}				
			}
			echo "Dados gravados com sucesso";
			echo "<input type='hidden' name='tmp_seq_modulo' id='tmp_seq_modulo' value='".$id."'/>";
			//print_r($_POST);
			exit;
		} catch (Exception $e) {			
			echo "Erro. <a href='#'>".$e->getMessage()."</a>";			
			exit;			
		}		
	}
	
	
	
	
	
	
	
	
	
	
	
	function formOrgao(){		
		permissao($_POST);
				
		$this->smarty->assign('tipoOrgao',$this->aux->indicador('ind_tipo_orgao'));
				
		$this->smarty->assign('perfis',$this->aux->select_cmbPerfil());
		
		//print_r($tipoOrgao);
				
		$dados = $this->sql->select_dadosOrgaos($_POST['seq_orgao']);
		if($dados){
			$this->smarty->assign('dados',$dados[0]);
			$this->smarty->assign('update',"S");
		}else{
			$this->smarty->assign('update',"N");
		}				
		
		return true;
	}
	
	function consultaOrgao(){
		$dados = $this->sql->select_dadosOrgaos("-1");
		$this->smarty->assign('dados',$dados);		
		return true;
	}
	
	function salvarOrgao(){
		try {
			permissao($_POST);
			
			if(!$_POST['flg_orgao_status']) $_POST['flg_orgao_status']='0'; 
					
			if($this->sql->select_validaOrgao($_POST) && $_POST['update']=="N"){
				throw new Exception("Erro. <a href='#'>Não foi possível gravar os dados, os dados informados estão duplicados.</a>");				
			}else{
				if($_POST['update']=="S"){
					$id = $_POST['seq_orgao'];	
					$this->sql->update_Orgao($_POST);	
				}else{					
					$id = $this->sql->insert_Orgao($_POST);
				}				
			}
			echo "Dados gravados com sucesso";
			echo "<input type='hidden' name='tmp_seq_orgao' id='tmp_seq_orgao' value='".$id."'/>";
			//print_r($_POST);
			exit;
		} catch (Exception $e) {			
			echo "Erro. <a href='#'>".$e->getMessage()."</a>";			
			exit;			
		}		
	}
	
	
	
	
	function formUsuario(){		
		permissao($_POST);
	
		$this->smarty->assign('perfis',$this->aux->select_cmbPerfil());
		
		/*if($_SESSION['seq_perfil']==1){
			$this->smarty->assign('empresas',$this->aux->select_cmbEmpresa(-1));
		}else{
			$this->smarty->assign('empresas',$this->aux->select_cmbEmpresa($_SESSION['seq_empresa']));
		}*/
		
		
		
		$dados = $this->sql->select_dadosUsuarios($_POST['seq_usuario']);
		if($dados){
			$this->smarty->assign('dados',$dados[0]);
			$this->smarty->assign('update',"S");
		}else{
			$this->smarty->assign('update',"N");
		}				
		
		return true;
	}
	
	function consultaUsuario(){
		$dados = $this->sql->select_dadosUsuarios("-1");
		$this->smarty->assign('dados',$dados);		
		return true;
	}
	
	function salvarUsuario(){
		try {
			permissao($_POST);
			
			if(!$_POST['flg_usuario_ativo']) $_POST['flg_usuario_ativo']='N'; 
					
			if($this->sql->select_validaUsuario($_POST) && $_POST['update']=="N"){
				throw new Exception("Erro. <a href='#'>Não foi possível gravar os dados, os dados informados estão duplicados.</a>");				
			}else{
				if($_POST['update']=="S"){					
					$id = $_POST['seq_usuario'];	
					$this->sql->update_Usuario($_POST);	
				}else{					
					$id = $this->sql->insert_Usuario($_POST);
				}				
			}
			echo "Dados gravados com sucesso";
			echo "<input type='hidden' name='tmp_seq_usuario' id='tmp_seq_usuario' value='".$id."'/>";
			//print_r($_POST);
			exit;
		} catch (Exception $e) {			
			echo "Erro. <a href='#'>".$e->getMessage()."</a>";			
			exit;			
		}		
	}
	
	
}
?>