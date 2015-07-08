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

<?php include 'zendesk.php'; ?>
<?php include 'geo.php'; ?>

<style>

#wraper { background-color:rgba(0, 0, 0, 0.85); width:100%; height:100%; position: absolute; top:0; bottom: 0; left: 0; right: 0; margin: auto; z-index: 99 !important; }
#antecipe { width:414px; height:414px; position: absolute; top:0; bottom: 0; left: 0; right: 0; margin: 200px auto auto auto; background:url(http://d1rkg9ks3dlpsw.cloudfront.net/progressiva2606/banner_pop_in.jpg); }


</style>

</head>

<body>


<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery("#wraper").click(function() {
		document.getElementById("wraper").setAttribute("style","display:none;");
	});
});
	
</script>

<div id="wraper"><div id="antecipe"><img src="http://d1rkg9ks3dlpsw.cloudfront.net/blank.png" width="414" height="414" style="margin:35px 0 0 0;" border=0 /></div></div>


<div id="main">
  <?php include "header_menu_zen.php"; ?>

  <div id="content">
  
  
  
    
<?php $videocod = "123674214"; $videotit = "OSKLEN F/W 15 SPFW"; include "video.php"; // VIDEO F/W 15 ?> 

<?php include "uploads/gallery/conteudofw15_lookbook_fem_pt.php"; include "fotos.php"; // FOTOS LOOKBOOK FW/15 ?> 
<?php include "uploads/gallery/conteudofw15_lookbook_masc_pt.php"; include "fotos.php"; // FOTOS LOOKBOOK FW/15 ?>   

<?php include "uploads/gallery/conteudofw15_desfile.php"; include "fotos.php"; // FOTOS DESFILE FW/15 ?>
<?php include "uploads/gallery/conteudofw15_campanha.php"; include "fotos.php"; // FOTOS CAMPANHA FW/15 ?>   
    
    <!-- TRUE OSKLEN RIVA -->
    <div id="content_its" class="it_cont" style="width:173px;">
      <div id="content_its_sld"><a href="/trueosklenriva/" target="_blank"><img src="img/trueosklenriva.jpg" width="173" height="350" /></a></div>
      <div id="content_its_txt">
        <h2><a href="/trueosklenriva/" target="_blank">TENIS RIVA</a></h2>
        <p class="lilgrey">Clique e saiba onde comprar</p>
      </div>
    </div>
    <!-- -->
    
<?PHP // OPCAO 1 
/*
$qual = mt_rand(1, 2);
if ($qual==1) {

?>    
    
<?php $videocod = "104669776"; $videotit = "making of oskleninhotim s/s 15"; include "video.php"; // MK OF INHOTIM ?>   
<?php include "uploads/gallery/conteudolookbook_fem_2e_pt.php"; include "fotos.php"; // LOOKBOOK INHOTIM FEM (1A E 2A ENTRADAS) ?>
<?php include "uploads/gallery/conteudolookbook_masc_2e_pt.php"; include "fotos.php"; // LOOKBOOK INHOTIM MASC (1A E 2A ENTRADAS) ?>
<?php $videocod = "106856343"; $videotit = "oskleninhotim s/s 15 NYFW"; include "video.php"; // DESFILE INHOTIM NYFW ?>  
<?php $videocod = "117803442"; $videotit = "FASHION RIO OSKLEN PRAIA A&B S/S 15"; include "video.php"; // DESFILE PRAIA ?>
<?php include "uploads/gallery/conteudoosklenpraiaab_loobook.php"; include "fotos.php"; // LB PRAIA ?>
<?php include "uploads/gallery/conteudoinhotim_fotos_nyfw.php"; include "fotos.php"; // FOTOS DESFILE NYFW ?>


<?PHP // OPCAO 2 

} else { ?>


<?php $videocod = "117803442"; $videotit = "FASHION RIO OSKLEN PRAIA A&B S/S 15"; include "video.php"; // DESFILE PRAIA ?>
<?php include "uploads/gallery/conteudolookbook_fem_2e_pt.php"; include "fotos.php"; // LOOKBOOK INHOTIM FEM (1A E 2A ENTRADAS) ?>
<?php include "uploads/gallery/conteudolookbook_masc_2e_pt.php"; include "fotos.php"; // LOOKBOOK INHOTIM MASC (1A E 2A ENTRADAS) ?>
<?php include "uploads/gallery/conteudoosklenpraiaab_loobook.php"; include "fotos.php"; // LB PRAIA ?>
<?php $videocod = "104669776"; $videotit = "making of oskleninhotim s/s 15"; include "video.php"; // MK OF INHOTIM ?>   
<?php $videocod = "106856343"; $videotit = "oskleninhotim s/s 15 NYFW"; include "video.php"; // DESFILE INHOTIM NYFW ?>  
<?php include "uploads/gallery/conteudoinhotim_fotos_nyfw.php"; include "fotos.php"; // FOTOS DESFILE NYFW ?>



<?php } ?>

<?php //include "uploads/gallery/conteudoinhotim_lookbook_fem.php"; include "fotos.php"; // LB 1A ENTRADA?>
<?php //include "uploads/gallery/conteudoinhotim_lookbook_masc.php"; include "fotos.php"; // LB 1A ENTRADA ?>
<?php //include "uploads/gallery/conteudoinhotim_collection.php"; include "fotos.php"; // CAMPAIGN FOTOS?>
<?php //include "uploads/gallery/conteudoinhotim_lookbook.php"; include "fotos.php"; // FOTOS PRESENTATION SPFW ?>
 
  */ ?>  
    <div style="clear:both;"></div>
  </div>
  
  
  
  
  <?php include "footer.php"; ?>
  <div style="clear:both;"></div>
</div>
</body>


</html>
