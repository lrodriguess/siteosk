<?php
require "array_lojas.php";
$lojaVar = 13;
$tipo = 2;
$linha = 1;
$num0 = 0;
$catIds = array();

function array_unique_multi($arrayFun) {
	$out = array();
	foreach ($arrayFun as $row) {
		$out[$row[1]] = $row;
	}
	return array_values($out);
}

function retornaPais($n, $numdBusca){
	global $tipo;
	if($n['country'] == $numdBusca && $n['tipo_id'] == $tipo) {
		return array(
			$n['loja_id'], // 0
			$n['state'], // 1
			$n['email'], // 2
			$n['address'], // 3
			$n['phone'], // 4
			$n['map'], // 5
			$n['lat'], // 6
			$n['long'], // 7
		);
	}else{
		return NULL;
	}
}

foreach($lojasGeralArray as $resultado) {
	if($resultado['loja_id'] == $lojaVar) {
		$Paisbusca = $resultado['country'];
		$tipoVar = $resultado['tipo_id'];
		break;
	}
}

$cEstado = array_map("retornaPais", $lojasGeralArray, array_fill(0, count($lojasGeralArray), $Paisbusca));
$resultEstado = array_unique_multi(array_filter($cEstado));

$num = count($resultEstado);
print_r($resultEstado);
echo '<br><br>';
if($num>1){
	if($num<24){
		echo "<ul>";
		foreach($resultEstado as $retorno) {
			$num0++;
			echo "<li><a loja='".utf8_encode($retorno[0])."' tipo='".$tipo."' linhac='".$linha."' linhas='".$num0."'>".utf8_encode($retorno[1])."</a></li>";
		}
		echo "</ul>";
	}else{
		echo "<ul>";
		for($i=0;$i<24;$i++){
			$arrayTemp = $resultEstado[$num0];
			echo "<li><a loja='".utf8_encode($arrayTemp[0])."' tipo='".$tipo."' linhac='".$linha."' linhas='".$num0."'>".utf8_encode($arrayTemp[1])."</a></li>";
			$num0++;
		}
		echo "</ul>";
		echo "<ul>";
		while($num0<$num){
			$arrayTemp = $resultEstado[$num0];
			echo "<li><a loja='".utf8_encode($arrayTemp[0])."' tipo='".$tipo."' linhac='".$linha."' linhas='".$num0."'>".utf8_encode($arrayTemp[1])."</a></li>";
			$num0++;
		}
		echo "</ul>";
	}
}elseif($tipoVar == 5){
	foreach($resultEstado as $retorno) {
		echo '<ul><li><a href="mailto:'.$retorno[2].'">'.$retorno[2].'</a></li></ul>';
	}
}elseif(($tipoVar == 2) && ($Paisbusca == "Rio de Janeiro" || $Paisbusca == "RIO dE JANEIRO")) {
	foreach($resultEstado as $retorno) {
		echo '<ul><li><a href="mailto:'.$retorno[2].'">'.$retorno[2].'</a></li></ul>';
	}	
}else{
	foreach($resultEstado as $retorno) {
		echo "<div id='".$lojaVar."-".$Paisbusca."' class=\"fimloja\" >";
		echo '<div id="map" lat="'.$retorno[6].'" lng="'.$retorno[7].'" ></div>';
		echo "<h4>".utf8_encode($retorno[3])." - TEL.:".$retorno[4]." - ".$retorno[2]."</h4>";
		echo "</div>";
	}
}
?>