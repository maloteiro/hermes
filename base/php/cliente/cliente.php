<?php
	function __construct($classes){
	function formConsulta(){		
	function formCadastroArtefato(){
	function ajaxVisualizar(){
		if(!in_array($extensao,$bloqueados)){ 
    function formCadastroEntrevista(){
            //exit;
	function formCadastro(){		
		if($dados){
	function salvarEntrevista(){
            if($_POST['update']=="S"){
            }
			$msg = "Dados gravados com sucesso";				
			$parametros['a'] 				= 'cliente';
			$parametros['seq_entrevista']	= $id;
			$parametros['msg'] 				= $msg;			
			$parametros['token'] 			= $_SESSION['token'];
			$this->token->redirect($parametros);			
			exit;
		} catch (Exception $e) {
			echo "Erro. <a href='#'>".$e->getMessage()."</a>";
			exit;
		}
	}
	function salvarCadastro(){
		try {
			permissao($_POST);

			if(!$_POST['flg_cliente_ativo']) $_POST['flg_cliente_ativo']='N';				
			if($this->sql->select_validaCadastro($_POST) && $_POST['update']=="N"){
				$msg = "N�o foi poss�vel gravar os dados, os dados informados est�o duplicados.";
			}else{
				if($_POST['update']=="S"){
					$id = $_POST['seq_cliente'];
					$this->sql->update_Cadastro($_POST);
				}else{
					$id = $this->sql->insert_Cadastro($_POST);
				}
			}
			$msg = "Dados alterados com sucesso";
			$parametros['a']            	= 'cliente';
	function salvarArtefato(){		
			$uploaddir 		= $_SESSION['uploaddir'];
			if($extensao=='doc'){				
				$data = file_get_contents($filePath);
				$fields = array(
				$fieldsQueryString = http_build_query($fields);
				$ch = curl_init("http://www4.i9tecnologia.com/file3/upload.php");
				$conteudo = curl_exec($ch);
			}			
			if (move_uploaded_file($_FILES['dsc_artefato_nome']['tmp_name'], remover_caracter($uploadfile))) {			
				$arquivo = explode(".", $_FILES['dsc_artefato_nome']['name']);				
				if($extensao=='docx'){
					require_once("libs/php/filetotext/class.filetotext.php");
					$docObj = new Filetotext(remover_caracter($uploadfile));
					$conteudo = utf8_decode($docObj->convertToText());
				}		
				$_POST['txt_artefato_conteudo'] = $conteudo;				
	            if($_POST['update']=="S"){
	            }else{					
				$msg = "Dados gravados com sucesso";
			}
			$parametros['a'] 			= 'cliente';
			$parametros['d'] 			= 'cliente';
			$parametros['f'] 			= 'formCadastro';
			$parametros['seq_artefato']		= $id;
			$parametros['seq_cliente']		= $_POST['seq_cliente'];
			$parametros['msg'] 				= $msg;			
?>