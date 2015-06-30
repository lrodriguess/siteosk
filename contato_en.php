<?php $lang = "en"; ?>
<?php
$paginaAtual = 'Contato';
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
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/inicio.js"></script>
<script type="text/javascript">
$(document).ready(function() {		
	$('.formmenu li').hover(function (){
		$(this).addClass('active');
		$(this).siblings('.formmenu li').removeClass('active');
		$(this).append('<span id="arrow"></span>');
	}, function(){
		$(this).removeClass('active');
		$('#arrow', this).remove();
	});		
	$('.formmenu li').click(function(){
		$(this).addClass('clicked');
		$('#clickarrow').remove();
		$(this).append('<span id="clickarrow"></span>')
		$(this).siblings().removeClass('clicked');
		
		phpname = $(this).attr('rel');
		tamanhoForm = $('.'+phpname).outerWidth(true) + 21; //20 padding + 1 p/ crossb
		tamanhoContent = tamanhoForm + menuPrinc;
		tamanho = tamanhoContent;
		$('#content').width(tamanhoContent);
		$('.'+phpname).fadeIn();
		$('.'+phpname).siblings().hide();
	
	});			
});
</script>
</head>

<body>
<div id="main">
  <?php include "header_menu.php"; ?>
  <div id="content"> 
    <!-- -->
    <div id="content_its" class="it_cont it_t_263" style="width:308px;">
      <div id="content_its_sld">
        <ul class="formmenu">
          <a href="mailto:online@osklen.com.br?subject=Osklen Contact&amp;body= Please, fill in the blanks below. %0A%0A Name: %0A E-mail: %0A Country/State: %0A Message: %0A%0A" .utf8_encode($row[7]).""="">
          <li rel="fale-conosco" class="">
            <h4>Contact Us</h4>
            <p>send us a message to online@osklen.com.br</p>
          </li>
          <?php /* */?>
          </a> <a href="mailto:franquias@osklen.com.br?subject=Osklen Contact&amp;body= Please, fill in the blanks below. %0A%0A Name: %0A E-mail: %0A phone: %0A ID: %0A Birth date: %0A Country/State: %0A %0A  Occupation: %0A Experience: %0A already had another franchise? %0A Have any kind of business? %0A City / State you would like to open franchise: %0A %0A %0A If you already have a market place, describe it: %0A %0A If you are thinking of society, describe the main characteristics of your potential partner and any relatedness %0A %0A Why do you intend to open a Osklen franchise? %0A %0A Who will run the business? %0A %0A Please tell us why, in your opinion, a Osklen store would succeed in this market: %0A %0A %0A %0A" .utf8_encode($row[7]).""="">
          <li rel="franquias" class="">
            <h4>Franchise</h4>
            <p>be an Osklen franchisee</p>
          </li>
          </a> <a href="mailto:atacado@osklen.com.br">
          <li rel="multimarcas" class="">
            <h4>Multibrand</h4>
            <p>Sign up to be a reseller</p>
          </li>
          </a> <a href="/work-with-us.php">
          <li rel="formrh" class="">
            <h4>Human Resources</h4>
            <p>work with us</p>
          </li>
          </a>
          <?php /* */?>
        </ul>
      </div>
      <div id="content_its_txt"></div>
    </div>
    <!-- -->
    <div style="clear:both;"></div>
  </div>
  <?php include "footer.php"; ?>
  <div style="clear:both;"></div>
</div>
</body>
</html>


