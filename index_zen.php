

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php include 'meta.php'; ?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" type="image/png" href="img/favicon.png">
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<!-- pos-clique dinamize --><script type="text/javascript" src="js/TRACK_105.js"></script><!-- pos-clique dinamize -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11667320-11']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  



</script>

<script language="JavaScript" src="http://j.maxmind.com/app/country.js" type="text/javascript"></script>
<?php /* * / ?>
<script language="JavaScript" type="text/javascript">
if(geoip_country_code() != "BR") { 
var onde = geoip_country_code(); window.location = 'site_en.php';
} else { 
var onde = geoip_country_code();
}
</script>
<?php /* */?>

<?php include 'geo.php'; //checa se é outra lingua ?> 

<!-- Start of osklen Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(c){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("https://assets.zendesk.com/embeddable_framework/main.js","osklen.zendesk.com");/*]]>*/</script>
<script>
  zE(function() {
    zE.setLocale('pt-BR');
  });
</script>
<!-- End of osklen Zendesk Widget script -->



<title>Osklen</title>
</head>

<?php 

/*
	$qualimg = mt_rand(1,6);
	//echo $qualimg;
	
	if ($qualimg == 6) {
		$fundoimg = "img/home_inhotim_04.jpg"; 
		$logo = "escuro";
	} else if ($qualimg == 1) {
		$fundoimg = "img/home_inhotim_02.jpg"; 
		$logo = "fundoclaro";
	} else if ($qualimg == 2) {
		$fundoimg = "img/home_inhotim_03.jpg"; 
		$logo = "escuro";
	} else if ($qualimg == 3) {
		$fundoimg = "img/home_inhotim_05.jpg"; 
		$logo = "fundoclaro";
	} else if ($qualimg == 4) {
		$fundoimg = "img/home_inhotim_07.jpg"; 
		$logo = "escuro";
	} else if ($qualimg == 5) {
		$fundoimg = "img/home_inhotim_01.jpg"; 
		$logo = "escuro";
	}
*/
	
	$fundoimg = "img/home_ontheroad.jpg"; 
	$logo = "escuro";

?>

<body class="pre-home <?=$logo?> riohomepre01"> 



   <img id="fundo" class="bg" src="<?=$fundoimg?>" width="1564" height="1000" alt="" />



	<div class="collection"></div>

    <ul class="menu riohomepre01"> 
    
       <li class="logo">
       		Osklen
       </li>
       <li class="com">
       		<a href="site.php" title=".COM">.COM</a>
       </li>
       <li class="store">
            <a href="http://store.osklen.com" target="_blank" title="STORE">
                STORE
            </a>
       </li>
      
	</ul>
  <script>
    $(document).ready(function() {
      function resizeImg() {
        var bgImage = $('.bg'),
            imgwidth = bgImage.width(), 
             imgheight = bgImage.height(),
             winwidth = $(window).width(),
             winheight = $(window).height(),
             widthratio = winwidth / imgwidth,
             heightratio = winheight / imgheight,
             widthdiff = heightratio * imgwidth,
             heightdiff = widthratio * imgheight;

        if(heightdiff>winheight) {
          bgImage.css({
            width: winwidth+'px',
            height: heightdiff+'px'
          });
        } else {
          bgImage.css({
            width: widthdiff+'px',
            height: winheight+'px'
          });    
        }
        
       $(".bg").show();
         
      }
      resizeImg();
      $(window).resize(function() {
        resizeImg();
      });
    });
  </script>
  
  <a href="https://plus.google.com/106884842942672326603" rel="publisher">Google+</a>
</body>
</html>