<?php $lang = "en"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php'; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Osklen</title>
<link rel="icon" type="image/png" href="http://osklen.com/wp-content/themes/osklen/img/favicon.png">
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

<?php //include 'geo-us.php'; ?>

</head>

<body>
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
<div id="main">
  <?php include "header_menu.php"; ?>

  <div id="content">
  
    
<?php $videocod = "100511841"; $videotit = "FASHION RIO OSKLEN PRAIA A&B S/S 15"; include "video.php"; ?>
<?php $videocod = "86356213"; $videotit = "SÃO PAULO FASHION WEEK FOOTBALL SERIES F/W 14"; include "video.php"; ?>

    
<?php /* FOOTBALL */ ?>
<?php // include "uploads/gallery/conteudofootball_campaign.php"; include "fotos.php"; ?>

<?php // $videocod = "75490565"; $videotit = "New YORK FASHION WEEK FOOTBALL SERIES F/W 14"; include "video.php"; ?>
    
<?php include "uploads/gallery/conteudofootball_lookbook_fem.php"; include "fotos.php"; ?>
<?php include "uploads/gallery/conteudofootball_lookbook_masc.php"; include "fotos.php"; ?>
     
<?php include "uploads/gallery/conteudofootball_presslb.php"; include "fotos.php"; ?>
<?php /* FOOTBALL */ ?>
  

<?php // include "uploads/gallery/conteudoosklenpraiaab_loobook.php"; include "fotos.php"; ?>    

<?php /* RIO * / ?>
<!-- artbook -->
<?php include "uploads/gallery/conteudo0003.php"; include "fotos.php"; ?>

<?php $videocod = "75490565"; $videotit = "NEW YORK FASHION WEEK +5521 RIO S/S 14"; include "video.php"; ?>

<?php $videocod = "73259580"; $videotit = "SÃO PAULO FASHION WEEK +5521 RIO S/S 14"; include "video.php"; ?>

<!-- LB AV women -->
<?php include "uploads/gallery/conteudo0001.php"; include "fotos.php"; ?>
    
<!-- LB AV men -->
<?php include "uploads/gallery/conteudo0002.php"; include "fotos.php"; ?>
    
<!-- LB women -->
<?php include "uploads/gallery/conteudolookbook_masc_pt.php"; include "fotos.php"; ?>
    
<!-- LB men -->
<?php include "uploads/gallery/conteudolookbook_fem_pt.php"; include "fotos.php"; ?>
    
<!-- desfile fotos -->
<?php include "uploads/gallery/conteudo5521rio_lookbook.php"; include "fotos.php"; ?>
 <!-- -->
 
<?php /* RIO */ ?>

 

    
    <div style="clear:both;"></div>
  </div>
  <?php include "footer.php"; ?>
  <div style="clear:both;"></div>
</div>
</body>
</html>
