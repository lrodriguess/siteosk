<?php 
 
//echo "HTTP_HOST [{$_SERVER['HTTP_HOST']}]\n"; 
//echo "SERVER_NAME [{$_SERVER['SERVER_NAME']}]"; 
 
$sitehost = $_SERVER['HTTP_HOST'];
$sitename = $_SERVER['SERVER_NAME'];

if ($sitehost == "tenisosklen.com.br") {
	echo "veio do tenis";
	//header('Location: http://www.osklen.com/lojas');
	//exit;
} else if ($sitehost == "trueosklenriva.com.br") {
	echo "veio do true";
	//header('Location: http://www.osklen.com/trueosklenriva');
	//exit;
} else if ($sitehost == "osklen.com") {
	echo "veio do com";
	//header('Location: http://www.osklen.com/index.php');
	//exit;
} 


?>