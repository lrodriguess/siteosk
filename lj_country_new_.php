<?php
require "array_lojas.php";
$tipoVar = 3;
$i0 = 0;

function array_unique_multi($arrayFun) {
	$out = array();
	foreach ($arrayFun as $row) {
		$out[$row[1]] = $row;
	}
	return array_values($out);
}

function retornaPais($n, $idBusca){
	if($n['tipo_id'] == $idBusca) {
		return array($n['loja_id'], $n['country'], $n['email']);
	}else{
		return NULL;
	}
}

$cPais = array_map("retornaPais", $lojasGeralArray, array_fill(0, count($lojasGeralArray), $tipoVar));
$resultPais = array_unique_multi(array_filter($cPais));

foreach($resultPais as $retorno) {
	$i0++;	
	if($tipoVar!=4){
		echo "<li><a loja='".$retorno[0]."' tipo='".$tipoVar."' linhac='".$i0."'>".utf8_encode($retorno[1])."</a></li>";
	}else{
		echo "<li><a rel='".$tipo."' href='mailto:".$retorno[2]."'>".$retorno[2]."</a></li>";
	}
}

?>