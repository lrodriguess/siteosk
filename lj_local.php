<?php
include("conex.php");
$tipo = $_GET['tipo'];
$linha = $_GET['linhac'];
$linhas = $_GET['linhas'];
$res = mysql_query("SELECT DISTINCT country FROM `lj_lojas` WHERE tipo_id ='$tipo'");
$country = mysql_result($res,$linha,0);
$ress = mysql_query("select distinct state from `lj_lojas` where tipo_id='$tipo' and country='$country'");
$state=mysql_result($ress,$linhas,0);
		/*local*/
		$query = "select distinct local from `lj_lojas` where tipo_id='".$tipo."' and country='".$country."' and state='".$state."' ORDER BY LOCAL ASC";
		$res = mysql_query($query);
		$num = mysql_num_rows($res);
		if($num>1){
			for($i=0;$i<$num;$i++){
				$reslocal = mysql_result($res,$i,0);
				echo "<li><a tipo='".$tipo."' linhac='".$linha."' linhas='".$linhas."' linhal='".$i."'>".$reslocal."</a></li>";
			}
		}else{
			$loja = mysql_query("select email,address,phone,lat,`long`,map from lj_lojas where tipo_id='".$tipo."' and country='".$country."' and state='".$state."'");
			echo mysql_error();
			$country = str_replace(' ','_',$country);
			$state = str_replace(' ', '_',$state);
			echo "<div id='".$tipo."-".$country."-".$state."' class=\"fimloja hentry\" >";
				echo "<div id='map' lat='".mysql_result($loja,0,"lat")."' lng='".mysql_result($loja,0,"long")."'></div>";
				echo "<h4>".utf8_encode(mysql_result($loja,0,'address'))." - TEL.:".mysql_result($loja,0,'phone')."</h4>";
			echo "</div>";
		}
?>