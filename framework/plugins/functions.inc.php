<?php
function dateansi(){	return date("Y-m-d H:i:s"); }
function dateformartANSI($data){	if($data != ""){		list($dia,$mes,$ano) = explode("/",$data);		$data= $ano."-".$mes."-".$dia;	}	else 			$data = "";	return $data;	}
function dateday(){	return date("d"); }
function dateymonth(){	return date("m"); }
function dateyear(){	return date("Y"); }
function ip(){	if($_SERVER['HTTP_X_FORWARDED_FOR']){		$ip['ipVisitante'] = $_SERVER['HTTP_X_FORWARDED_FOR']; 	} else{		$ip['ipVisitante'] = $_SERVER['REMOTE_ADDR'];	}
	return $ip['ipVisitante'];}
function uuid(){	$uuid = uniqid(rand(), true);	return $uuid;}
function datehm(){	$today = getdate();	return $today['hours'].":".$today['minutes'];	}
function message($nomeChave, $id, $mensagem){	$html = "<retorno>					<campo>".$nomeChave."</campo>					<identificacao>".$id."</identificacao>					<mensagem>".$mensagem."</mensagem>								  </retorno>";	return $html;}
function montaCombo($retornosql, $id, $valor, $combo){			if($retornosql){        	$resultado  = "<select id='".$combo."' name='".$combo."' class='selectcor'>";			$resultado .= "	<option value='' readonly>Selecione o Munic�pio</option>";			foreach($retornosql as $dado){				if ($cod_cidade != $dado[$id])					$resultado .= "<option value='".$dado[$id]."'>".$dado[$valor]."</option>";				else 					$resultado .= "<option value='".$dado[$id]."' selected>".$dado[$valor]."</option>";			}		    $resultado .= "</select>"; 		}
 		else{ 			$resultado =" 				<select id='".$combo."' name='".$combo."' class=\"required\">		    		<option value=\"\">Selecione um valor</option>		    	</select>"; 		}		return $resultado;}

function remover_caracter($string) {    $string = preg_replace("/[�����]/", "a", $string);	$string = preg_replace("/[�����]/", "A", $string);    $string = preg_replace("/[���]/", "e", $string);	$string = preg_replace("/[���]/", "E", $string);    $string = preg_replace("/[��]/", "i", $string);	$string = preg_replace("/[��]/", "I", $string);    $string = preg_replace("/[�����]/", "o", $string);	$string = preg_replace("/[�����]/", "O", $string);    $string = preg_replace("/[���]/", "u", $string);	$string = preg_replace("/[���]/", "U", $string);    $string = preg_replace("/[�]/", "c", $string);	$string = preg_replace("/[�]/", "C", $string);    $string = preg_replace("/[][><}{)(:;,!?*%~^`&#@]/", "", $string);    $string = preg_replace("/ /", "_", $string);
    //$string = strtolower($string);
    return $string;}
$today = getdate();
//print_r($today);//exit;
$_SISTEMA['date_ansi'] 		= dateansi();$_SISTEMA['date_hm'] 		= $today['hours'].":".$today['minutes'];$_SISTEMA['date_hms']		= $today['hours'].":".$today['minutes'].":".$today['seconds'];$_SISTEMA['date_day'] 		= dateday();$_SISTEMA['date_ymonth']	= dateymonth();$_SISTEMA['date_year'] 		= dateyear();$_SISTEMA['date_internal']	= $_SERVER['REQUEST_TIME'];$_SISTEMA['session_ip'] 	= $_SERVER['REMOTE_ADDR'];$_SISTEMA['session_host']	= $_SERVER['HTTP_HOST'];
//echo "<pre>";

//print_r($today);
//print_r($_SISTEMA);
//print_r($_SERVER);
?>