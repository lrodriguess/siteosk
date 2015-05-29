<?php
$paginaAtual = 'Contato';
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
</head>

<body>
<div id="main">
  <?php include "header_menu.php"; ?>
  <div id="content"> 
    <!-- -->
    <div id="content_its" class="it_cont it_t_263" style="width:308px;">
      <div id="content_its_sld">
        <ul class="formmenu">
          <a href="mailto:online@osklen.com.br?subject=Osklen Fale Conosco&amp;body= Por favor, preencha os campos abaixo. %0A%0A Nome: %0A E-mail: %0A CPF: %0A Cidade/UF: %0A Mensagem: %0A%0A" .utf8_encode($row[7]).""="">
          <li rel="fale-conosco" class="">
            <h4>Fale Conosco</h4>
            <p>envie sua dúvida, sugestão ou reclamação para online@osklen.com.br</p>
          </li>
          </a> <a href="mailto:franquias@osklen.com.br?subject=Osklen Fale Conosco&amp;body= Por favor, preencha os campos abaixo. %0A%0A Nome: %0A E-mail: %0A Telefone: %0A Tel Comercial: %0A CPF: %0A Data Nasc.: %0A Cidade/UF: %0A %0A  Ocupação: %0A Experiência: %0A Já teve outra franquia? %0A Já possui empresa? %0A Cidade/UF que gostaria de abrir franquia: %0A  %0A  %0A Se você já tem algum ponto comercial em vista, diga onde esta situado e as características do local: %0A  %0A Se está pensando em sociedade, descreva as principais características de seu sócio em potencial e, se houver, relação de parentesco %0A %0A  Por que tem interesse em abrir uma franquia da Osklen? %0A  %0A Quem irá administrar o negócio? %0A  %0A Diga por que, em sua opinião, uma loja Osklen teria sucesso neste mercado: %0A %0A %0A %0A" .utf8_encode($row[7]).""="">
          <li rel="franquias" class="">
            <h4>Franquias</h4>
            <p>seja um franqueado Osklen - Clique aqui para enviar sua ficha</p>
          </li>
          </a> <a href="mailto:atacado@osklen.com.br">
          <li rel="multimarcas" class="">
            <h4>Multimarcas</h4>
            <p>cadastre-se para ser um revendedor - Clique aqui para enviar sua ficha</p>
          </li>
          </a> <a href="mailto:drh@osklen.com.br">
          <li rel="formrh" class="">
            <h4>Recursos Humanos</h4>
            <p>trabalhe conosco - envie seu CV para drh@osklen.com.br</p>
          </li>
          </a>
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
