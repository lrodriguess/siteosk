<?php
include("conex.php");
$tipo = $_GET['tipo'];
$linha = $_GET['linhac'];
$res = mysql_query("SELECT DISTINCT country FROM `lj_lojas` WHERE tipo_id ='$tipo'");
$country = mysql_result($res,$linha,0);
		/*states*/
		$query = "select distinct state from `lj_lojas` where tipo_id='".$tipo."' and country='".$country."'";
		$res = mysql_query($query);
		$num = mysql_num_rows($res);
		if($num>1){
			if($num<24){
				echo "<ul>";
				for($i=0;$i<$num;$i++){
					$resstate = mysql_result($res,$i,0);
					echo "<li><a tipo='".$tipo."' linhac='".$linha."' linhas='".$i."'>".$resstate."</a></li>";
				}
				echo "</ul>";
			}else{
				echo "<ul>";
				for($i=0;$i<24;$i++){
					$resstate = mysql_result($res,$i,0);
					echo "<li><a tipo='".$tipo."' linhac='".$linha."' linhas='".$i."'>".$resstate."</a></li>";
				}
				echo "</ul>";
				if($num>23){
					echo "<ul>";
					while($i<$num){
						$resstate = mysql_result($res,$i,0);
						echo "<li><a tipo='".$tipo."' linhac='".$linha."' linhas='".$i."'>".$resstate."</a></li>";
					$i++;}
					echo "</ul>";
				}
			}
		}elseif($tipo==5){
			$email = mysql_query("select email from `lj_lojas` where tipo_id=5 and country='$country'");
			echo '<ul><li><a rel="'.$tipo.'" tipo="'.$tipo.'" href="mailto:'.mysql_result($email,0,0).'">'.mysql_result($email,0,0).'</a></li></ul>';
		}elseif(($tipo == 2) && ($country == "Rio de Janeiro" || $country == "RIO dE JANEIRO")) {
                    $email = mysql_query("select email from `lj_lojas` where tipo_id=2 and country='$country'");
                    echo '<ul><li style="text-transform:uppercase">'.mysql_result($email,0,0).'</li></ul>';
//                    echo '<ul><li><a rel="'.$tipo.'" tipo="'.$tipo.'" href="mailto:'.mysql_result($email,0,0).'">'.mysql_result($email,0,0).'</a></li></ul>';
                }else{
			$loja = mysql_query("select email,address,phone,lat,`long`,map from lj_lojas where tipo_id='$tipo' and country='$country'");
                        $country = str_replace(' ','_',$country);
                        echo "<div id='".$tipo."-".$country."' class=\"fimloja\" >";
                        echo '<div id="map" lat="'.mysql_result($loja,0,"lat").'" lng="'.mysql_result($loja,0,"long").'" ></div>';
                        echo "<h4>".utf8_encode(mysql_result($loja,0,'address'))." - TEL.:".mysql_result($loja,0,'phone')." - ".mysql_result($loja,0,'email')."</h4>";
                        echo "</div>";                        
		}
?>
