
<?php /* codigo de geolocalizacao antigo * / ?>
<script language="JavaScript" src="http://j.maxmind.com/app/country.js" type="text/javascript"></script>

<script language="JavaScript" type="text/javascript">

if(geoip_country_code() == "JP") {
	window.location = '/site_jp.php'; //window.location = '/index_jp.php';
} else if(geoip_country_code() != "BR") {
	window.location = '/site_en.php';
}
var onde = geoip_country_code(); 

/* force US * /
window.location = '/site_en.php';
/* force US */

/* force JP * /
window.location = '/index_jp.php';
/* force JP * /
</script>
<?php /* codigo de geolocalizacao antigo */ ?>

<?php
include('ip2locationlite.class.php');
 
//Load the class
$ipLite = new ip2location_lite;
$ipLite->setKey('f69898b2911a18e9be62deb272b5d75649a7b3a969a08b33c6157b1c6e2243cf');
 
//Get errors and locations
$locations = $ipLite->getCity($_SERVER['REMOTE_ADDR']);
$errors = $ipLite->getError();
 
//Getting the result
if (!empty($locations) && is_array($locations)) {
  foreach ($locations as $field => $val) {
    //echo $field . ' : ' . $val . "<br />\n";
	if ($field == 'countryCode') { $onde = $val; }; // pais = countryCode
	
  }
}
//echo $onde . "<br />\n";
if ($onde == "JP") { 
	header('Location: http://osklen.com/index_jp.php'); exit; 
} else if ($onde != "BR") { 
	header('Location: http://osklen.com/site_en.php'); exit; 
}
