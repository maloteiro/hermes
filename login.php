<?php	
	session_start();		
	error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE & ~E_WARNING & ~E_ERROR);	
	//error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_ERROR);
	//error_reporting(E_ALL );
	date_default_timezone_set('America/Sao_Paulo');
	
	
	header("Content-Type: text/html; charset=iso-8859-1"); 
	// setando o charset para iso8859-1
	ini_set("default_charset","iso-8859-1");
	setlocale(LC_CTYPE,"pt_BR");
		
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
		
	define("_PATH_", dirname(__FILE__));
	define("_FRAMEWORK_", dirname(__FILE__)."/framework");
	define("_CONFIG_", dirname(__FILE__)."/config");
	define("_BASE_", dirname(__FILE__)."/base");
	
	// incluindo os arquivos de conexao ao banco de dados
	require_once(_CONFIG_."/configuracao.php");
	require_once(_CONFIG_."/conexao.php");
	require_once(_CONFIG_."/parametros.php");
	require_once(_FRAMEWORK_."/plugins/plugins.inc.php");
	require_once(_FRAMEWORK_."/plugins/functions.inc.php");
	require_once(_FRAMEWORK_."/plugins/security_token/index.php");
	
		
	require _FRAMEWORK_.'/plugins/smarty-3.1.30/libs/Smarty.class.php';
	
	// Funções do token do sistema
	$token = new token();
	
	// configuração do smarty
	$smarty = new SmartyBC;
	
	$classes['token'] 	= $token;
	$classes['smarty'] 	= $smarty;
	$classes['db']		= $db;
	
	function smarty_block_dynamic($param, $content, $smarty) {
	    return $content;
	}
	
	$smarty->compile_dir = "./temp";
	$smarty->caching = true;
	$smarty->cache_lifetime = 1800;
	//$smarty->allow_php_tag = true;
	$smarty->allow_php_templates = true;
	$smarty->clear_all_cache();
	$smarty->register_block('dynamic', 'smarty_block_dynamic', false);
	
	$smarty->template_dir = _BASE_.'/html/'.isset($cf["html"]).'/';
	
	// adicionando as variaveis globais para usar nos templates
	$smarty->assign('globals',$GLOBALS);
	
	$d = $_REQUEST["d"];
	$a = $_REQUEST["a"];
	$f = $_REQUEST["f"];
	
	// se nao estiver com as variaveis requeridas, ele redireciona
	if(!$d && !$a && !$f){
		$a = "login";
		$d = "login";
		$f = "formLogin";
	}
		
	if(file_exists(_BASE_.'/php/'.$d.'/'.$a.'.php')){
		require _BASE_.'/php/'.$d.'/'.$a.'.php';	
		
		// arquivo de template possui o seguinte formato: arquivo_funcao.html e fica em: visao/$cf["html"]/diretorio($d)/arquivo($a)_funcao($f).html
		$template = $d."/".$a."_".$f.".html";
		
		//incluindo a classe models
		if(file_exists(_BASE_.'/sql/'.$d.'/bd'.$a.'.php')){
			require _BASE_.'/sql/'.$d.'/bd'.$a.'.php';
			$classedb = "bd".$a;
			$instdb = new $classedb($classes['db']);
			$classes['sql'] = $instdb;
		}
		
			// instanciando a classe, o $template eh utilizado apenas pelo prototype
		$instancia = new $a($classes);		
		// chamando a funcao
		$funcao = $instancia->$f($db, $smarty);
	}else{
		echo "O arquivo <strong>"._BASE_.'/php/'.$d.'/'.$a.'.php'."</strong> não foi encontrado, por favor contacte o administrador do sistema.";
		exit;
	}
	
	// atribuindo dados para serem utilizados no smarty
	$smarty->assign('funcao',$funcao);
	$smarty->assign('d',$d);
	$smarty->assign('a',$a);
	$smarty->assign('f',$f);
	$smarty->assign('template',$template);
	$smarty->assign('var_sistema',$_SISTEMA);
	
	// mostrando o template
	$smarty->display('login.html');
	
	function permissao($x){
		$msg = "Efetue login para acessar essa funcionalidade do sistema";
	
		if(($x['token'] || $x['security_token'])==$_SESSION['token']){
			if(isset($x['a']) && isset($x['d']) && isset($x['f'])){			
				return true;
	
			}else{
				limpaSessao();
				require_once('public/redirect.php'); //die($html);
				exit;
			}
		}else{
			limpaSessao();		
			require_once('public/redirect.php'); //die($html);
			exit;
		}
	}
?>