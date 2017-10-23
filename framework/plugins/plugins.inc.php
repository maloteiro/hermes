<?php
function retornaExtensao($tipo=""){	$extensao = '';	switch ($tipo) {	    case 'application/pdf':	        $extensao = 'pdf';	        break;	    case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':	        $extensao = 'xlsx';	        break;		case 'application/vnd.ms-excel':	        $extensao = 'xls';	        break;		case 'application/msword':	        $extensao = 'doc';	        break;			    case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':	        $extensao = 'docx';	        break;		case 'application/vnd.oasis.opendocument.text':	        $extensao = 'odt';	        break;		case 'application/zip':	        $extensao = 'zip';	        break;	    default:	       $extensao= "Não encontrada.";	}}

function uuidV2($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false){	// Caracteres de cada tipo	$lmin = 'abcdefghijklmnopqrstuvwxyz';	$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';	$num = '1234567890';	$simb = '!@#$%*-';
	// Variáveis internas	$retorno = '';	$caracteres = '';
	// Agrupamos todos os caracteres que poderão ser utilizados	$caracteres .= $lmin;	if ($maiusculas) $caracteres .= $lmai;	if ($numeros) $caracteres .= $num;	if ($simbolos) $caracteres .= $simb;
	// Calculamos o total de caracteres possíveis	$len = strlen($caracteres);
	for ($n = 1; $n <= $tamanho; $n++) {		// Criamos um número aleatório de 1 até $len para pegar um dos caracteres		$rand = mt_rand(1, $len);		// Concatenamos um dos caracteres na variável $retorno		$retorno .= $caracteres[$rand-1];	}	return $retorno;}
function uuidV4() {	$uuid = array(		'time_low'  => 0,		'time_mid'  => 0,		'time_hi'  => 0,		'clock_seq_hi' => 0,		'clock_seq_low' => 0,		'node'   => array()	);
	$uuid['time_low'] = mt_rand(0, 0xffff) + (mt_rand(0, 0xffff) << 16);	$uuid['time_mid'] = mt_rand(0, 0xffff);	$uuid['time_hi'] = (4 << 12) | (mt_rand(0, 0x1000));	$uuid['clock_seq_hi'] = (1 << 7) | (mt_rand(0, 128));	$uuid['clock_seq_low'] = mt_rand(0, 255);
	for ($i = 0; $i < 6; $i++) {		$uuid['node'][$i] = mt_rand(0, 255);	}

	$uuid = sprintf('%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x',		$uuid['time_low'],		$uuid['time_mid'],		$uuid['time_hi'],		$uuid['clock_seq_hi'],		$uuid['clock_seq_low'],		$uuid['node'][0],		$uuid['node'][1],		$uuid['node'][2],		$uuid['node'][3],		$uuid['node'][4],		$uuid['node'][5]	);	
	return $uuid;}
?>
