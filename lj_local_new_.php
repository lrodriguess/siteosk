<?php
require "array_lojas.php";
$lojaVar = 481;
$tipo = 7;
$linha = 1;
$linhas = 1;
$num0 = 0;
$catIds = array();

function array_unique_multi($arrayFun) {
	$out = array();
	foreach ($arrayFun as $row) {
		$out[$row[8]] = $row;
	}
	return array_values($out);
}

function retornaPais($n, $numdBusca){
	global $tipo;
	if($n['state'] == $numdBusca && $n['tipo_id'] == $tipo) {
		return array(
			$n['loja_id'], // 0
			$n['state'], // 1
			$n['email'], // 2
			$n['address'], // 3
			$n['phone'], // 4
			$n['map'], // 5
			$n['lat'], // 6
			$n['long'], // 7
			$n['local'], // 8
		);
	}else{
		return NULL;
	}
}

foreach($lojasGeralArray as $resultado) {
	if($resultado['loja_id'] == $lojaVar) {
		$Estadobusca = $resultado['state'];
		$Paisbusca = $resultado['country'];
		$tipoVar = $resultado['tipo_id'];
		break;
	}
}


$cLojas = array_map("retornaPais", $lojasGeralArray, array_fill(0, count($lojasGeralArray), $Estadobusca));
$resultLocal = array_unique_multi(array_filter($cLojas));
$num = count($resultLocal);

if($tipo == 7) {
	while($num0<$num){
		for($i=0;$i<24;$i++){
			$arrayTemp = $resultLocal[$num0];
			echo "<li>".$num0." - ".utf8_encode($arrayTemp[8])." - ".utf8_encode($arrayTemp[3])."</li>";
			$num0++;
		}
		$faltaNum = $num - $num0;
		if($faltaNum < 24) {
			break;
		}
		echo "</ul><ul>";
	}
	echo "</ul><ul>";
	while($num0<$num){	
		$arrayTemp = $resultLocal[$num0];
		echo "<li>".$num0." - ".utf8_encode($arrayTemp[8])." - ".utf8_encode($arrayTemp[3])."</li>";
		$num0++;
	}
}else{
	if($num>1){
		foreach($resultLocal as $retorno) {		
			echo "<li><a loja='".utf8_encode($retorno[0])."' tipo='".$tipo."' linhac='".$linha."' linhas='".$linhas."' linhal='".$num0."'>".utf8_encode($retorno[8])."</a></li>";
			$num0++;
		}
	}else{
		foreach($resultLocal as $retorno) {
			echo "<div id='".$lojaVar."-".$Paisbusca."-".$Estadobusca."' class=\"fimloja\" >";
			echo '<div id="map" lat="'.$retorno[6].'" lng="'.$retorno[7].'" ></div>';
			echo "<h4>".utf8_encode($retorno[3])." - TEL.:".$retorno[4]." - ".$retorno[2]."</h4>";
			echo "</div>";
		}
	}
}

?>