<?php
require "array_lojas.php";
$lojaVar = $_GET['loja'];
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
echo "<h4>".utf8_encode($lojaIdAb['address'])." - ".$lojaIdAb['state']." - TEL.:".$lojaIdAb['phone'];
//if ($lojaIdAb['email']) { echo " - <a href='mailto:".$lojaIdAb['email']."'><strong>[mande uma mensagem]</strong></a>"; };
echo "</h4></div>";

?>