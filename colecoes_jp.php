<?php $lang = "jp"; ?>
<?php
$paginaAtual = 'Coleções';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="ENDLESS SUMMER S|S 2013 COLLECTION">
<meta name="site_name" content="Osklen">
<meta name="title" content="Osklen">
<meta name="image" content="http://osklen.com/wp-content/themes/osklen/img/facebook_tab_ES_thumb.jpg">
<meta name="keywords" content="Desfiles, Lookbooks, Coleções, Filmes, Fotos, Lojas">
<meta name="author" content="Manager: Leonardo Rodrigues, Developers: Marcos Loureiro, Designers: Rafael Simoens">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Osklen - <?php echo $paginaAtual;?></title>
<link rel="icon" type="image/png" href="http://osklen.com/wp-content/themes/osklen/img/favicon.png">
<link rel="stylesheet" type="text/css" media="all" href="css_new/style.css">
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/galleria-1.2.5.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/classic/galleria.classic.js"></script>
<script type="text/javascript" src="js/inicio.js"></script>
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
    
<?php //  $titulocolecao = "F/W 15"; $tagcolecao = "fw15"; include "colecoes_code.php"; ?>
<?php  $titulocolecao = "OSKLENINHOTIM S/S 15"; $tagcolecao = "inhotim"; include "colecoes_code.php"; ?>
<?php  $titulocolecao = "FOOTBALL SERIES F/W 14"; $tagcolecao = "football"; include "colecoes_code.php"; ?>
<?php  $titulocolecao = "RIO+5521 S/S 14"; $tagcolecao = "5521rio"; include "colecoes_code.php"; ?>
<?php  $titulocolecao = "INTO THE MOUNTAINS F/W 13"; $tagcolecao = "intothemountains"; include "colecoes_code.php"; ?>




    <div style="clear:both;"></div>
  </div>
  <?php include "footer.php"; ?>
  <div style="clear:both;"></div>
</div>
</body>
</html>
