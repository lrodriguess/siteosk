<?php
require 'fotos.php';
$local = isset($_GET['local']) ? trim($_GET['local']) : NULL;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META name="description" content="">
<META name="keywords" content="">
<link rel="stylesheet" type="text/css" href="css/principal.css"/>
<title>TRUE OSKLEN RIVA</title>
<link rel="icon" href="https://d377p28biw13s0.cloudfront.net/media/favicon/default/favicon_osklen.png" type="image/x-icon"/>
<link rel="shortcut icon" href="https://d377p28biw13s0.cloudfront.net/media/favicon/default/favicon_osklen.png" type="image/x-icon"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.jscroll.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="js/jquery.infieldlabel.min.js"></script>
<script type="text/javascript" src="js/detectmobilebrowser.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	
	alturaInstaDiv = Math.round($('#riva-insta').height()/2);	
	alturaHeader = ($('#header').outerHeight()+$('.historia').outerHeight()+100);
	
	if(navigator.userAgent.indexOf('Mac') > 0) {
		$('body').addClass('classMac');
	}
	$(".scroll").scrollable({
		circular: false,
		touch: false,
		mousewheel: false
	});
	
	$('#seta-top').click(function() {
		irPara('BODY');
	});
	
	$('.esgot-bt').click(function() {
		formDiv = $(this).parent().parent().parent().find('#tns-esgotado-layer');
		if($(formDiv).is(':visible')){
			$(formDiv).fadeOut();
		}else{
			$(formDiv).fadeIn();
		}
	});
	
	  $(window).scroll(function() {		
		  if ($(window).scrollTop() > alturaHeader){
			  $('#seta-top').fadeIn();
		  } else {
			  $('#seta-top').fadeOut();
		  }
		  //**************
		  //**************
		  if (typeof(timeout) != 'undefined') {
			  clearTimeout(timeout);
		  }
		  if (typeof(timeout2) != 'undefined') {
			  clearTimeout(timeout2);
		  }
		  if(!jQuery.browser.mobile){
			if($(window).scrollTop() >= ($('#riva-anos').offset().top + $('#riva-anos').outerHeight() - window.innerHeight)+alturaInstaDiv) {
			  //****
			}else{
				timeout = setTimeout('alinharTela()', 1200);
			}
		  }
	  });
	//**** INSTAGRAM
	$.ajax({
		url: "instagram.php",
		cache: false
	}).done(function(html) {
		$("#riva-insta-cont").html(html);
		$('.insta-link').click(function() {
			idValor = $(this).attr('id_thumb');
			$('#insta-layer').fadeIn();
			$('#insta-middle').fadeIn(function() {
				$("#insta-middle").html('<div id="insta-loading"></div>');				
				abrirInsta(idValor);
			});
		});
		$('#insta-layer').click(function() {
			$("#insta-middle").html('');
			$('#insta-layer').fadeOut();
			$('#insta-middle').fadeOut();
		});
	});
	<?php if(!is_null($local)) { ?>
	irPara('.<?php echo $local; ?>');
	<?php } ?>
});
function abrirInsta(id_img){
	$.ajax({
		type: "POST",
		url: "instagram_pic.php",
		data: {
			id: id_img
		},
		cache: false
	}).done(function(html) {
		$("#insta-middle").html(html);
	});	
}
function abrirInstaUrl(url){
	var win = window.open(url, '_blank');
}
function irPara(local){
	$(window).scrollTo(local, 700, {axis:'y'});
}
function alinharTela(){
	screenTop = $(document).scrollTop();
	divTopWindow = getElsAt(screenTop);
	divTopWindow = $(divTopWindow).last();
	//*****
	metadeDiv = Math.round($(divTopWindow).height()/2);
	alturaDiv = $(divTopWindow).offset().top;
	meioDiv = metadeDiv + alturaDiv;
	if(screenTop > meioDiv) {
		divTopWindow = $(divTopWindow).next();
	}
	//*****
	$(window).scrollTo(divTopWindow, 400, {
		axis:'y',
		easing:'easeOutCirc',
		offset: {top:2},
		onAfter:function(){
			if (typeof(timeout2) != 'undefined') {
				clearTimeout(timeout2);
			}
			timeout2 = setTimeout('clearTime()', 300);
		}
	});
}
function getElsAt(top2){
	return $("body").find(".breackPoint").filter(function() {
		return $(this).offset().top < top2;
    });
}
function clearTime(){
	if (typeof(timeout) != 'undefined') {
		clearTimeout(timeout);
	}
}
</script>
</head>
<body>
<?php include '../analytics.php' ?>

<div id="main">
  <div id="principal">
    <div id="seta-top">
      <div id="seta-top2"></div>
    </div>
    <div id="header">
      <div id="top-barra">
        <div id="top-icon"></div>
        <div id="menu">
          <ul>
            <li><a title="História" onclick="irPara('.historia')">História</a></li>
            <li><a title="#Trueosklenriva" onclick="irPara('#riva-insta')">#Trueosklenriva</a></li>
            <li><a href="onde-encontrar.php" title="Denuncie / Onde encontro originais">Onde comprar</a></li>
            <li><a href="http://osklen.com" title="osklen.com" target="_blank">osklen.com</a></li>
            <li><a href="http://store.osklen.com/shoes.html" title="Osklen Online Store" target="_blank">Osklen Online Store</a></li>
          </ul>
        </div>
      </div>
      <div id="top">
        <div id="top-left"><img src="images/top-left.png" width="466" height="375" /></div>
        <div id="top-right">
          <div id="logo">
            <h1><a href="index.php" title="TRUE OSKLEN RIVA">TRUE OSKLEN RIVA</a></h1>
          </div>
        </div>
      </div>
    </div>
    <div id="content"> 
      <!-- TIMELINE -->
        <div id="timeline">
        <ul>
        	<li id="2005"><a title="2005" onclick="irPara('.historia')"><img src="images/2005.jpg" /></a></li>
        	<li id="2006"><a title="2006" onclick="irPara('.2006')"><img src="images/2006.jpg" /></a></li>
        	<li id="2007"><a title="2007" onclick="irPara('.2007')"><img src="images/2007.jpg" /></a></li>
        	<li id="2008"><a title="2008" onclick="irPara('.2008')"><img src="images/2008.jpg" /></a></li>
        	<li id="2009"><a title="2009" onclick="irPara('.2009')"><img src="images/2009.jpg" /></a></li>
        	<li id="2010"><a title="2010" onclick="irPara('.2010')"><img src="images/2010.jpg" /></a></li>
        	<li id="2011"><a title="2011" onclick="irPara('.2011')"><img src="images/2011.jpg" /></a></li>
        	<li id="2012"><a title="2012" onclick="irPara('.2012')"><img src="images/2012.jpg" /></a></li>
        	<li id="2013"><a title="2013" onclick="irPara('.2013')"><img src="images/2013.jpg" /></a></li>
        	<li id="2014"><a title="2014" onclick="irPara('.2014')"><img src="images/2014.jpg" /></a></li>
            <li id="2015"><a title="2015" onclick="irPara('.2015')"><img src="images/2015.jpg" /></a></li>
        </ul>
        
        </div>
      <!-- HISTORIA -->
      <div id="content_block" class="historia"> 
        <!-- TITULO -->
        <div id="content_block" class="i2005titulo">
          <h2>2005</h2>
          <h3>A CRIAÇÃO</h3>
          <p>O Riva é um clássico da Osklen. Desenhado em 2005 e lançado em 2006, a marca desejava levar para os pés o lifestyle Osklen. Inspirado nos elementos orgânicos e urbanos do Rio de Janeiro, seu estilo despojado e sofisticado elevou o status dos tênis, antes pensados somente para a prática de esportes. Desde a sua criação, o Riva já ganhou inúmeras versões e é um dos modelos Osklen mais recriados em edições especiais, resultado das constantes pesquisas de material realizadas.</p>
        </div>
        <!-- FIM TITULO -->
        <div id="content_block" align="center"><img src="images/historia-tenis.jpg" width="926" height="309" /></div>
        <div id="content_block">
          <div id="hist_det_left">
            <h3>RIVA<span>CLÁSSICO</span></h3>
            <p>Além do design inédito, o Riva foi lançado já com as características que o eternizaram, como o trio de ilhoses aplicados na parte frontal do tênis. Outros detalhes como as faixas laterais do cabedal e o solado personalizado com a linha dupla colorida também aparecem desde o primeiro modelo. A palmilha e o forro foram produzidos em couro a fim de oferecer mais conforto aos pés e estabilidade ao caminhar.</p>
          </div>
          <div id="hist_det_right"><img src="images/historia-detalhes.jpg" width="408" height="471" /></div>
        </div>
      </div>
      <!-- ANOS -->
      <div id="riva-anos">
        <?php foreach ($tenisArray as $value) { ?>
        <?php $anoAtual = $value['ano']; ?>
        <!-- BLOCO ANO --> 
        <!-- TITULO -->
        <div id="content_block" class="bloco-ano breackPoint <?php echo $anoAtual; ?>">
          <h2 style="background-image:url(fotos/<?php echo $anoAtual; ?>/titulo.jpg);"><?php echo $anoAtual; ?></h2>
        </div>
        <!-- FIM TITULO -->
        <?php foreach ($value['modelos'] as $value2) { ?>
        <?php if ($value2['exibir']) { ?>
        <!-- BLOCO TÊNIS-->
        <div id="bloco-tenis" class="breackPoint <?php echo($value2['exibir'] ? "" : "esgotado" ); ?>">
          <?php if (!$value2['disponivel']) { ?>
          <!-- LAYER ESGOTADO -->
          <div id="tns-esgotado">
            <div id="tns-esgotado-btn">
              <?php /* LEO * / ?><button class="esgot-bt"><span>&nbsp;</span>quero esse modelo devolta</button><?php /* LEO */ ?>
            </div>
          </div>
          <div id="tns-esgotado-layer">
            <div id="tns-esg-int">
              <div id="tns-esg-int-form">
                <form method="post" action="eniar" id="<?php echo $anoAtual; ?>_<?php echo $value2['id']; ?>">
                  <input type="hidden" name="modelo" id="modelo" value="<?php echo $value2['ref']; ?>" />
                  <fieldset>
                    <div id="tns-esg-int-form-line">
                      <label for="nome">Nome:</label>
                      <input type="text" class="inpt_g" name="nome" id="nome" />
                    </div>
                    <div id="tns-esg-int-form-line">
                      <label for="email">Email:</label>
                      <input type="text" class="inpt_g" name="email" id="email" />
                    </div>
                    <div id="tns-esg-int-form-line">
                      <label for="email">Sexo:</label>
                      <input type="checkbox" name="feminino" id="feminino" value="sim" />
                      <span>f</span> <span class="letrau">tamanho:</span>
                      <input type="checkbox" name="tamanho_f[]" id="tamanho_f[]" class="check_fem" value="34" />
                      <span>34</span>
                      <input type="checkbox" name="tamanho_f[]" id="tamanho_f[]" class="check_fem" value="35" />
                      <span>35</span>
                      <input type="checkbox" name="tamanho_f[]" id="tamanho_f[]" class="check_fem" value="36" />
                      <span>36</span>
                      <input type="checkbox" name="tamanho_f[]" id="tamanho_f[]" class="check_fem" value="37" />
                      <span>37</span>
                      <input type="checkbox" name="tamanho_f[]" id="tamanho_f[]" class="check_fem" value="38" />
                      <span>38</span>
                      <input type="checkbox" name="tamanho_f[]" id="tamanho_f[]" class="check_fem" value="39" />
                      <span>39</span> </div>
                    <div id="tns-esg-int-form-line">
                      <label>&nbsp;</label>
                      <input type="checkbox" name="masculino" id="masculino" value="sim" />
                      <span>m</span> <span class="letrau">tamanho:</span>
                      <input type="checkbox" name="tamanho_m[]" id="tamanho_m[]" class="check_fem" value="39" />
                      <span>34</span>
                      <input type="checkbox" name="tamanho_m[]" id="tamanho_m[]" class="check_fem" value="40" />
                      <span>40</span>
                      <input type="checkbox" name="tamanho_m[]" id="tamanho_m[]" class="check_fem" value="41" />
                      <span>41</span>
                      <input type="checkbox" name="tamanho_m[]" id="tamanho_m[]" class="check_fem" value="42" />
                      <span>42</span>
                      <input type="checkbox" name="tamanho_m[]" id="tamanho_m[]" class="check_fem" value="43" />
                      <span>43</span>
                      <input type="checkbox" name="tamanho_m[]" id="tamanho_m[]" class="check_fem" value="44" />
                      <span>44</span>
                      <input type="checkbox" name="tamanho_m[]" id="tamanho_m[]" class="check_fem" value="45" />
                      <span>45</span> </div>
                    <div id="tns-esg-int-form-line">
                      <label>&nbsp;</label>
                      <input type="submit" value="enviar" />
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
          <!-- FIM LAYER ESGOTADO -->
          <?php } // if esgotado ?>
          <a class="prev">
          <div id="tns-seta-left"></div>
          </a> <a class="next">
          <div id="tns-seta-right"></div>
          </a>
          <div id="tenis-top">
            <h5><?php echo $value2['nome']; ?></h5>
          </div>
          <div id="tenis-mask" class="scroll">
            <div id="tenis-tira">
              <?php foreach ($value2['fotos'] as $value3) { ?>
              <!-- FIM ITEM -->
              <div id="tenis-foto" align="center"><img src="fotos/<?php echo $anoAtual; ?>/<?php echo $value2['id']; ?>/<?php echo $value3; ?>.jpg" /></div>
              <!-- ITEM -->
              <?php } // loop fotos ?>
            </div>
          </div>
          <div id="tenis-bottom">
            <div id="tenis-texto">
              <p><?php echo $value2['descricao']; ?></p>
            </div>
            <ul>
              <?php if ($value2['link_compra']) { ?>
              	<li class="tns-bt-comprar"><a href="<?php echo $value2['link_compra']; ?>" target="_blank" title="COMPRAR">COMPRAR</a></li>
              <?php }; ?>
              <?php if ($value2['link_compart']) { ?>
              <li class="tns-bt-compart"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $value2['link_compart']; ?>" title="COMPARTILHAR" target="_blank">COMPARTILHAR</a></li>
              <?php }; ?>
              <li class="tns-bt-insta"><a onclick="irPara('.riva-insta')" title="#trueosklenriva">#trueosklenriva</a></li>
            </ul>
          </div>
        </div>
        <!-- FIM BLOCO TÊNIS -->
        <?php } // if exibir ?>
        <?php } // loop tenis ?>
        <!-- FIM BLOCO ANO -->
        <?php } // loop ano ?>
      </div>
      <!-- FIM ANOS --> 
      <!-- INSTAGRAM -->
      <a name="insta"></a>
      <div id="riva-insta" class="riva-insta">
        <div id="riva-insta-top">
          <h3>#true<span>osklen</span>riva</h3>
        </div>
        <div id="riva-insta-cont">
          <div id="insta-loading"></div>
        </div>
        <!-- INSTA LAYER -->
        <div id="insta-layer"></div>
        <div id="insta-middle"></div>
        <!-- FIM INSTA LAYER --> 
      </div>
      <!-- FIM INSTAGRAM --> 
    </div>
    <div id="footer"></div>
    <div style="clear:both;"></div>
  </div>
</div>
</body>
</html>