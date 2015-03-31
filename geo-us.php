<script language="JavaScript" src="http://j.maxmind.com/app/country.js" type="text/javascript"></script>

<script language="JavaScript" type="text/javascript">

if(geoip_country_code() != "BR") {
	var onde = geoip_country_code(); 
	//document.write("outsideBR - "); 
	//document.write(onde); 
	//window.alert(onde);
} else { 
	var onde = geoip_country_code(); 
	//document.write("insideBR - "); 
	//document.write(onde);
	//window.alert(onde);
	window.location = '/site.php';
}

</script>
