<?php
include("conex.php");
/*country*/
$tipo = $_GET['tipo'];
$res = mysql_query("SELECT DISTINCT country FROM `lj_lojas` WHERE tipo_id ='$tipo'");
$num = mysql_num_rows($res);
for($c=0;$c<$num;$c++){
	$rescountry = mysql_result($res,$c,0);
		if($tipo!=4){
			echo "<li><a tipo='".$tipo."' linhac='".$c."'>".utf8_encode($rescountry)."</a></li>";
		}else{
			$resis = mysql_query('select email from lj_lojas where tipo_id=4');
			echo "<li><a rel='".$tipo."' href='mailto:".mysql_result($resis,0,0)."'>".mysql_result($resis,0,0)."</a></li>";
		}
	}
?>