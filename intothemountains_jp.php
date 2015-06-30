<?php $lang = "jp"; ?>

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

<?php // include 'geo-br.php'; ?>

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
  

<?php include "uploads/gallery/conteudoitmartbook.php"; include "fotos.php"; ?>  

<div id="content_its" class="it_cont it_t_620">
      <div id="content_its_sld"><iframe src="http://player.vimeo.com/video/63200365?title=0&amp;byline=0&amp;portrait=0&amp;color=00adef" width="620" height="350" frameborder="0"></iframe></div>
      <div id="content_its_txt">
        <h2>SÃO PAULO FASHION WEEK – INTO THE MOUNTAINS F|W 2013</h2>
      </div>
    </div>
    

<?php include "uploads/gallery/conteudoitmlookbookfem.php"; include "fotos.php"; ?>  
<?php include "uploads/gallery/conteudoitmlookbookmasc.php"; include "fotos.php"; ?>  
<?php include "uploads/gallery/conteudoitmshoes.php"; include "fotos.php"; ?>  

    
 

    
    <div style="clear:both;"></div>
  </div>
  <?php include "footer.php"; ?>
  <div style="clear:both;"></div>
</div>
</body>
</html>
