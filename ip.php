<?php
$paginaAtual = 'IP';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php'; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Osklen -<?php echo $paginaAtual;?></title>
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

    <div id="content_its" class="it_cont it_t_263" style="width:335px;">
      <div id="content_its_sld">
        <div id="content_its_sld_tx" class="bk_gray it_tx_263 releaseBox pd_15p" style="width:305px;">
          <h1>Seu endereço IP atual é:</h1>
          <br>
          <p class="place"><?php $endereco = $_SERVER['REMOTE_ADDR']; ?><?=$endereco;?></p>
        </div>
      </div>
      <div id="content_its_txt"></div>
    </div>
  
  </div>
  <?php include "footer.php"; ?>
  <div style="clear:both;"></div>
</div>
</body>
</html>
