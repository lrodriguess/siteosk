<?php
header('Content-Type: text/html; charset=utf-8');
		
$host = "localhost"; //computador onde o servidor de banco de dados esta instalado
$user = "osklenold"; //seu usuario para acessar o banco
$pass = "osklen001"; //senha do usuario para acessar o banco
$banco = "osklen_old"; //banco que deseja acessar

$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
mysql_select_db($banco);

?>