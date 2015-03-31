<?php
include("conex.php");
$tipo = $_GET['tipo'];
$linha = $_GET['linhac'];
$linhas = $_GET['linhas'];
$linhal=$_GET['linhal'];
$res = mysql_query("SELECT DISTINCT country FROM `lj_lojas` WHERE tipo_id ='$tipo'");
$country = mysql_result($res,$linha,0);
$ress = mysql_query("select distinct state from `lj_lojas` where tipo_id='$tipo' and country='$country'");
$state=mysql_result($ress,$linhas,0);
$resss = mysql_query("select distinct local from `lj_lojas` where tipo_id='$tipo' and country='$country' and state='$state' ORDER BY LOCAL ASC");
$local=mysql_result($resss,$linhal,0);
		/*local*/
		$query = "select email,address,phone,lat,`long`,map from lj_lojas where tipo_id='$tipo' and country='$country' and state='$state' and local='$local'";
		$res = mysql_query($query);
		$num = mysql_num_rows($res);
		$country = str_replace(' ','_',$country);
		$state = str_replace(' ', '_',$state);
		$local = str_replace(' ', '_',$local);
			echo "<div id='".$tipo."-".$country."-".$state."-".$local."' class=\"fimloja\" >";
				echo "<div id='map' lat='".mysql_result($res,0,"lat")."' lng='".mysql_result($res,0,"long")."' ></div>";
				echo "<h4>".utf8_encode(mysql_result($res,0,'address'))." - TEL.:".mysql_result($res,0,'phone')."</h4>";
			echo "</div>";
?>