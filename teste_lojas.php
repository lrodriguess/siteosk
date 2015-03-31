<?php
require "array_lojas.php";
$lojaVar = 17;
$num0 = 0;
$catIds = array();

foreach($lojasGeralArray as $resultado) {
	if($resultado['loja_id'] == $lojaVar) {
		$lojaIdAb = $resultado;
		break;
	}
}

echo "<div id='".$lojaVar."-".$lojaIdAb['country']."-".$lojaIdAb['state']."-".$lojaIdAb['local']."' class=\"fimloja\" >";
echo '<div id="map" lat="'.$lojaIdAb['lat'].'" lng="'.$lojaIdAb['long'].'" ></div>';
echo "<h4>".utf8_encode($lojaIdAb['address'])." - TEL.:".$lojaIdAb['phone']." - ".$lojaIdAb['state']."</h4>";
echo "</div>";

?>