<?phpclass cliente{	private $db;	private $smarty;	private $token;	private $sql;	private $aux;
	function __construct($classes){		$this->db 		= $classes['db'];		$this->smarty 	= $classes['smarty'];		$this->token 	= $classes['token'];		$this->sql		= $classes['sql'];				$this->aux		= $classes['aux'];	}	function formSelecionaTipo(){				return true;	}
	function formConsulta(){				$dados = $this->sql->select_dadosCadastro("-1");		$this->smarty->assign('dados',$dados);		return true;	}
	function formCadastroArtefato(){		$dados = $this->sql->select_carregaArtefato($_POST['seq_cliente'],$_POST['seq_artefato']);				$cliente = $this->sql->select_dadosCadastro($_POST['seq_cliente']);		$this->smarty->assign('cliente',$cliente[0]);        if($dados){            $this->smarty->assign('dados',$dados[0]);                            $this->smarty->assign('update',"S");            } else {            $this->smarty->assign('update',"N");        }                return true;	}
	function ajaxVisualizar(){		$dados = $this->sql->select_carregaArtefato($_POST['seq_cliente'],$_POST['seq_artefato']);				$uploaddir 	= $_SESSION['uploaddir'];		$arquivo 	= $uploaddir.$dados[0]["dsc_artefato_nome"];		$aarquivo 	= pathinfo($arquivo);						$extensao	= $dados[0]['dsc_artefato_extensao'];		$bloqueados = array('php', 'html', 'htm', 'asp');						
		if(!in_array($extensao,$bloqueados)){ 		   if(isset($arquivo) && file_exists($arquivo)){		   	 		      switch($extensao){ 		      	case "txt": {		      		 		      		$f = fopen($arquivo, "r");					echo "<pre>";										while(!feof($f)) { 					    echo fgets($f) . "<br />";					}					echo "</pre>";					fclose($f);		      		break;				}		        case "pdf": $tipo="application/pdf"; break;		        case "exe": {		         			      		echo "<a href=\"download.php?arquivo=".$dados[0]["dsc_artefato_nome"]."\">Clique aqui para download</a>";		      		exit;		         	break;				 }		        case "zip": {		         			      		echo "<a href=\"download.php?arquivo=".$dados[0]["dsc_artefato_nome"]."\">Clique aqui para download</a>";		      		exit;		         	break;				 }		        case "doc": {					echo "<pre>";					echo  $dados[0]['txt_artefato_conteudo'];					echo "</pre>";		        	 		        	break;				}				case "docx": {		        	echo "<pre>";					echo  $dados[0]['txt_artefato_conteudo'];					echo "</pre>";		        	 		        	break;				}		        case "xls": $tipo="application/vnd.ms-excel"; break;		        case "ppt": {		         			      		echo "<a href=\"download.php?arquivo=".$dados[0]["dsc_artefato_nome"]."\">Clique aqui para download</a>";		      		exit;		         	break;				 }		         case "gif": {		         	$tipo="image/gif";					echo "<img src=\"imagem.php?arquivo=".$dados[0]["dsc_artefato_nome"]."\" />";					break;		      		exit;				 }		         case "png": {		         			         	$tipo="image/png"; 					echo "<img src=\"imagem.php?arquivo=".$dados[0]["dsc_artefato_nome"]."\" />";					break;		      		exit;				 }		         case "jpg": {		         	$tipo="image/jpg";					echo "<img src=\"imagem.php?arquivo=".$dados[0]["dsc_artefato_nome"]."\" />";					break;		      		exit;				 }		         case "mp3": {		         			      		echo "<a href=\"download.php?arquivo=".$dados[0]["dsc_artefato_nome"]."\">Clique aqui para download</a>";		      		exit;		         	break;				 }		         case "php": // deixar vazio por seurança		         case "htm": // deixar vazio por seurança		         case "html": // deixar vazio por seurança         		      }		      //header("Content-Type: ".$tipo); // informa o tipo do arquivo ao navegador		      //header("Content-Length: ".filesize($arquivo)); // informa o tamanho do arquivo ao navegador		      //header("Content-Disposition: attachment; filename=".basename($arquivo)); // informa ao navegador que é tipo anexo e faz abrir a janela de download, tambem informa o nome do arquivo		      //readfile($arquivo); // lê o arquivo		      //exit; // aborta pós-ações		   }				}else{			echo "Erro!";			exit;		} 		//echo $dados_arquivo;		exit;	}
    function formCadastroEntrevista(){            //echo "<pre>";            //print_r($_POST);            $dados = $this->sql->select_carregaEntrevista($_POST['seq_cliente'],$_POST['seq_entrevista']);                        $cliente = $this->sql->select_dadosCadastro($_POST['seq_cliente']);            //print_r($cliente[0]);
            //exit;            $this->smarty->assign('cliente',$cliente[0]);            if($dados){                $this->smarty->assign('dados',$dados[0]);                                $this->smarty->assign('update',"S");                } else {                $this->smarty->assign('update',"N");            }            //echo "aqui";            return true;	}
	function formCadastro(){				permissao($_POST);							$_SESSION['tip_cliente_tipo'] 	= isset($_POST["tip_cliente_tipo"]) ? $_POST["tip_cliente_tipo"] : $_SESSION['tip_cliente_tipo'];						$this->smarty->assign('estadocivil',$this->aux->indicador('ind_estado_civil'));				$dados = $this->sql->select_dadosCadastro($_POST['seq_cliente']);		
		if($dados){						$this->smarty->assign('entrevistas',$this->sql->select_carregaEntrevista($_POST['seq_cliente'],"-1"));						$this->smarty->assign('artefatos',$this->sql->select_carregaArtefato($_POST['seq_cliente'],"-1"));						$this->smarty->assign('dados',$dados[0]);			$this->smarty->assign('update',"S");		}else{						$this->smarty->assign('update',"N");		}		return true;	}
	function salvarEntrevista(){		try {						permissao($_POST);						if(!$_POST['flg_entrevista_ativa']) $_POST['flg_entrevista_ativa']='N'; 
            if($_POST['update']=="S"){				$id = $_POST['seq_entrevista'];					$this->sql->update_CadastroEntrevista($_POST);	            }else{									$id = $this->sql->insert_CadastroEntrevista($_POST);
            }
			$msg = "Dados gravados com sucesso";				
			$parametros['a'] 				= 'cliente';			$parametros['d'] 				= 'cliente';			$parametros['f'] 				= 'formCadastro';
			$parametros['seq_entrevista']	= $id;			$parametros['seq_cliente']		= $_POST['seq_cliente'];
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
				$msg = "Não foi possível gravar os dados, os dados informados estão duplicados.";
			}else{
				if($_POST['update']=="S"){
					$id = $_POST['seq_cliente'];
					$this->sql->update_Cadastro($_POST);
				}else{
					$id = $this->sql->insert_Cadastro($_POST);
				}
			}
			$msg = "Dados alterados com sucesso";
			$parametros['a']            	= 'cliente';			$parametros['d']            	= 'cliente';			$parametros['f']            	= 'formCadastro';			$parametros['tip_cliente_tipo']	= $_POST['tip_cliente_tipo'];			$parametros['seq_cliente']  	= $id;				$parametros['msg']          	= $msg;			$parametros['token']        	= $_SESSION['token'];			$this->token->redirect($parametros);						exit;		} catch (Exception $e) {						echo "Erro. <a href='#'>".$e->getMessage()."</a>";						exit;					}			}	 
	function salvarArtefato(){				try {            permissao($_POST);            
			$uploaddir 		= $_SESSION['uploaddir'];			$uploadfile 	= $uploaddir . basename($_FILES['dsc_artefato_nome']['name']);									$nome_arquivo 	= explode(".", $_FILES['dsc_artefato_nome']['name']);							$extensao		= strtolower(end($nome_arquivo));			
			if($extensao=='doc'){						        $filePath = $_FILES['dsc_artefato_nome']['tmp_name'];		        $fileName = $_FILES['dsc_artefato_nome']['name'];
				$data = file_get_contents($filePath);				$encripData = base64_encode($data);
				$fields = array(				    'content'    =>   $encripData,				    'name'       =>   $fileName,				);
				$fieldsQueryString = http_build_query($fields);				
				$ch = curl_init("http://www4.i9tecnologia.com/file3/upload.php");				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);				curl_setopt($ch, CURLOPT_POST, count($fields));				curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldsQueryString);
				$conteudo = curl_exec($ch);				curl_close($ch);
			}						
			if (move_uploaded_file($_FILES['dsc_artefato_nome']['tmp_name'], remover_caracter($uploadfile))) {							if(!$_POST['flg_artefato_ativo']){					 $_POST['flg_artefato_ativo']='N';				} 				$_POST['dsc_artefato_nome']		= remover_caracter($_FILES['dsc_artefato_nome']['name']);				$_POST['tip_artefato_tipo']		= $_FILES['dsc_artefato_nome']['type'];					$_POST['num_artefato_tamanho']	= $_FILES['dsc_artefato_nome']['size'];
				$arquivo = explode(".", $_FILES['dsc_artefato_nome']['name']);								$_POST['dsc_artefato_extensao']	= strtolower(end($arquivo));				
				if($extensao=='docx'){
					require_once("libs/php/filetotext/class.filetotext.php");
					$docObj = new Filetotext(remover_caracter($uploadfile));
					$conteudo = utf8_decode($docObj->convertToText());
				}		
				$_POST['txt_artefato_conteudo'] = $conteudo;				
	            if($_POST['update']=="S"){					$id = $_POST['seq_artefato'];						$this->sql->update_CadastroArtefato($_POST);
	            }else{										$id = $this->sql->insert_CadastroArtefato($_POST);	            }
				$msg = "Dados gravados com sucesso";
			}
			$parametros['a'] 			= 'cliente';
			$parametros['d'] 			= 'cliente';
			$parametros['f'] 			= 'formCadastro';			
			$parametros['seq_artefato']		= $id;
			$parametros['seq_cliente']		= $_POST['seq_cliente'];
			$parametros['msg'] 				= $msg;						$parametros['token'] 			= $_SESSION['token'];			$this->token->redirect($parametros);						exit;		} catch (Exception $e) {						echo "Erro. <a href='#'>".$e->getMessage()."</a>";						exit;					}	}}
?>