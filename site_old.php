<?php $lang = "pt"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php include 'meta.php'; ?>

<title>Osklen</title>

<link rel="icon" type="image/png" href="http://osklen.com/img/favicon.png">
<link rel="stylesheet" type="text/css" media="all" href="css_new/style.css">
<link rel="stylesheet" href="js/classic/galleria.classic.css" id="galleria-theme">
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/galleria-1.2.5.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/classic/galleria.classic.js"></script>
<script type="text/javascript" src="js/inicio.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$ = jQuery.noConflict();
	Galleria.loadTheme('js/classic/galleria.classic.min.js'); 
});


</script>

<?php include 'geo.php'; ?>

</head>

<body>
<?php /*
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
*/ ?>

<div id="main">
  <?php include "header_menu.php"; ?>

  <div id="content">
  
  
  
    
    <!-- -->
    <div id="content_its" class="it_cont" style="width:350px;">
      <div id="content_its_sld"><a href="/spfw.php?utm_source=site&utm_medium=link&utm_campaign=[om]spfw" target="_blank"><img src="img/spfw_1516collection.jpg" width="350" height="350" /></a></div>
      <div id="content_its_txt">
        <h2><a href="/spfw.php">SPFW 15|16 F|W collection</a></h2>
        <p class="lilgrey">Assista ao vivo aqui, a partir das 19h30</p>
      </div>
    </div>
    <!-- -->
    
    <!--  -->
    
<?php /* INHOTIM */ ?>

<?php $videocod = "106856343"; $videotit = "oskleninhotim s/s 15 NYFW"; include "video.php"; ?>  

<?php include "uploads/gallery/conteudolookbook_fem_2e_pt.php"; include "fotos.php"; ?>
<?php include "uploads/gallery/conteudolookbook_masc_2e_pt.php"; include "fotos.php"; ?>

<?php $videocod = "104669776"; $videotit = "making of oskleninhotim s/s 15"; include "video.php"; ?>   

<?php include "uploads/gallery/conteudoinhotim_lookbook_fem.php"; include "fotos.php"; ?>
<?php include "uploads/gallery/conteudoinhotim_lookbook_masc.php"; include "fotos.php"; ?>


<?php //include "uploads/gallery/conteudoinhotim_collection.php"; include "fotos.php"; ?>


<?php include "uploads/gallery/conteudoinhotim_fotos_nyfw.php"; include "fotos.php"; ?>

<?php include "uploads/gallery/conteudoinhotim_lookbook.php"; include "fotos.php"; ?>
    <!-- -- >
    <div id="content_its" class="it_cont" style="width:350px;">
      <div id="content_its_sld"><img src="img/inhotim_embreve.jpg" width="350" height="350" /></div>
      <div id="content_its_txt">
        <h2><a href="/trueosklenriva/" target="_blank">Inhotim S/S 15 collection</a></h2>
        
      </div>
    </div>
    <!-- -->      
<?php /* INHOTIM */ ?>


    
    
    <!-- -->
    <div id="content_its" class="it_cont" style="width:173px;">
      <div id="content_its_sld"><a href="/trueosklenriva/" target="_blank"><img src="img/trueosklenriva.jpg" width="173" height="350" /></a></div>
      <div id="content_its_txt">
        <h2><a href="/trueosklenriva/" target="_blank">TENIS RIVA</a></h2>
        <p class="lilgrey">Clique e saiba onde comprar</p>
      </div>
    </div>
    <!-- -->

<?php $videocod = "100511841"; $videotit = "FASHION RIO OSKLEN PRAIA A&B S/S 15"; include "video.php"; ?>

<?php include "uploads/gallery/conteudoosklenpraiaab_loobook.php"; include "fotos.php"; ?>

<?php /* FOOTBALL * / ?>
<?php include "uploads/gallery/conteudofootball_campaign.php"; include "fotos.php"; ?>
    
<?php include "uploads/gallery/conteudofootball_lookbook_fem.php"; include "fotos.php"; ?>
<?php include "uploads/gallery/conteudofootball_lookbook_masc.php"; include "fotos.php"; ?>
      
<?php $videocod = "86356213"; $videotit = "SÃO PAULO FASHION WEEK FOOTBALL SERIES F/W 14"; include "video.php"; ?>
     
<?php include "uploads/gallery/conteudofootball_presslb.php"; include "fotos.php"; ?>
<?php /* FOOTBALL */ ?>

    <!-- -->
    
    <div style="clear:both;"></div>
  </div>
  <?php include "footer.php"; ?>
  <div style="clear:both;"></div>
</div>
</body>


</html>
