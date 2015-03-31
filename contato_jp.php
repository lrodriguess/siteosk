<?php $lang = "jp"; ?>
<?php
$paginaAtual = ' Contact Us';
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


<!-- CSS do validador -->
    <link href="css_new/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="css_new/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    <link href="css_new/SpryValidationSelect.css" rel="stylesheet" type="text/css" />

<!-- Css do formulario -->
  <!--  <link rel="stylesheet" href="css_new/estilo.css" type="text/css" /> -->
</head>

<body>
<div id="main">
  <?php include "header_menu.php"; ?>
  <div id="content"> 
    <!-- -->
    <div id="content_its" class="it_cont it_t_263" style="width:360px;">
      <div id="content_its_sld">
        <ul class="formmenu">
           <li rel="fale-conosco" class="">
            <h4>Contact Us</h4>
            <p></p>
           
         </li>
          
          <?php /* */?>
        </ul>
      </div>
      <div id="content_its_txt"></div>
    </div>
   
     <div id="formulario" class="formulario">
        <form action="envia.php" method="POST"> <!--  chama o envia.php -->        

       
                   
        <div class="formulario-texto">name</div>
        <div class="formulario-campo">
        <span id="sprytextfield1">
        <input type="text" name="nomeremetente" class="textfield-nome"/>
        <br /><span class="textfieldRequiredMsg">Insert your name</span></span></div>
      
        
        <div class="formulario-texto">e-mail</div>
        <div class="formulario-campo"><span id="sprytextfield2">
        <input type="text" name="emailremetente" class="textfield-nome"/>
        <br /><span class="textfieldRequiredMsg">Insert your e-mail</span>
        <span class="textfieldInvalidFormatMsg">Invalid e-mail format</span></span></div> 
        
       
        
        
        <!--<div class="formulario-texto">phone</div>
        <div class="formulario-campo">
        
        <span id="sprytextfield3">
        <input type="text" name="ddd" class="textfield-ddd" />
        <span class="textfieldRequiredMsg">enter your area code</span>
        <span class="textfieldInvalidFormatMsg">Please insert your 2 digit area code</span>
        <span class="textfieldMinCharsMsg">Please insert your 2 digit area code</span>
        <span class="textfieldMaxCharsMsg">Please insert your 2 digit area code</span></span>
        
        <span id="sprytextfield4">
        <input type="text" name="telefone" class="textfield-telefone" /> <br />
        <span class="textfieldRequiredMsg">insert your phone number please</span>
        <span class="textfieldInvalidFormatMsg">invalid format, insert the number like this: 555555555</span></span></div>
                                                       
         
                      
        <div class="formulario-texto">subject</div>
        <div class="formulario-campo"><span id="sprytextfield5">
        <input type="text" name="assunto" class="textfield-nome"/>
        <br /><span class="textfieldRequiredMsg">Insert the subject</span></span></div>-->
        
       
        <div  style="float:left; width:100%;"> </div>
        <div class="formulario-texto">message</div>
        <div class="formulario-campo"><span id="sprytextarea1">
        <textarea name="mensagem" cols="35" rows="6"></textarea>
        <br /><span class="textareaRequiredMsg">Insert the subject</span></span></div>
                       
        <div>
     
        <input name="enviar" type="submit" value="Send" class="btn-contato-enviar"  />                
       
        </div>
       
       
        
        </form> 
      
                
 <!-- Chama validação do formulário -->
 
<script type="text/javascript" src="js/SpryValidationTextField.js" language="javascript" ></script>
<script type="text/javascript" src="js/SpryValidationTextarea.js" language="javascript" ></script>
<script type="text/javascript" src="js/SpryValidationSelect.js" language="javascript" ></script>    

<script type="text/javascript">

	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
	var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");

</script>

         </div> <!-- fecha div formulario -->
      
    <!-- -->
    <div style="clear:both;"></div>
  </div>
  <?php include "footer.php"; ?>
  <div style="clear:both;"></div>
</div>
</body>
</html>


