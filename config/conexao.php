<?php
include('framework/plugins/adodb5/adodb.inc.php');
// dizendo qual o sgbd sera utilizado
$db =  ADONewConnection($confDB["sgbd"]);

// realizando a conexao
//try {
	//print_r($confDB);
$db->NConnect($confDB["servidor"], $confDB["usuario"], $confDB["senha"], $confDB["banco"]) or die ("Não foi possível conectar: Erro:". mysql_errno());
//} catch (exception $e) {
//    print_r($e);
//}

// setando o modo como os dados sao carregado para associar o nome_do_campo da tabela ao seu valor
$db->setFetchMode(ADODB_FETCH_ASSOC);

?>