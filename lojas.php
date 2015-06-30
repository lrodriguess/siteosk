<?php
$paginaAtual = 'Lojas';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta name="google-site-verification" content="I3ws5YHcOuWHfg7znDQIF_PuuRhtgIHc6zWRak89Io8">
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
<script type="text/javascript">
$(document).ready(function(){	
	size = $('#content').width();
	$('#tipo li a').live('click',function(){
		var rel = $(this).attr("rel"); 
		$('.estado').hide();
		$('.fimloja').hide();
		$('.loja').hide();
		$('.local').hide();
		$.ajax({
			type:'GET',
			url:'lj_country_new.php',
			data: "tipo="+rel,
			success: function(data){
				$('ul.country').empty().html(data).attr('id',rel);
				plus = $('ul.country').outerWidth(true);
				incrementSize1 = size + plus + 2;
				$('#content').width(incrementSize1);
				$('ul.country').show();
			}
		});
	});
	$('.country li a').live('click',function(){
		var loja = $(this).attr("loja");
		var tipo = $(this).attr("tipo");
		var linhac = $(this).attr("linhac");
		if(tipo != 4){
			$('.estado').hide(); 
			$('.fimloja').hide(); 
			$('.loja').hide();
			$('.local').hide();
			$.ajax({
				type:'GET',
				url:'lj_states_new.php',
				data: "tipo="+tipo+'&linhac='+linhac+'&loja='+loja,
				success: function(data){
					$('div.estado').empty().html(data).attr('id',tipo+linhac);
					plus = $('div.estado').outerWidth(true);
					incrementSize2 = incrementSize1 + plus + 2;
					$('#content').width(incrementSize2);
					$('div.estado').show();
					googlemap();
				}
			});
		}
	});
	$('.estado li a').live('click',function(){
		var loja = $(this).attr("loja");
		var tipo = $(this).attr("tipo");
		var linhac = $(this).attr("linhac"); 
		var linhas = $(this).attr("linhas"); 
		if(tipo!=5){
			$('.fimloja').hide();
			$('.loja').hide();
			$('.local').hide();
			$.ajax({
				type:'GET',
				url:'lj_local_new.php',
				data: "tipo="+tipo+'&linhac='+linhac+'&linhas='+linhas+'&loja='+loja,
				success: function(data){
					$('ul.local').empty().html(data).attr('id',tipo+linhac+linhas);
					plus = $('ul.local').outerWidth(true);
					incrementSize3 = incrementSize2 + plus + 2;
					$('#content').width(incrementSize3);
					$('ul.local').show();
					googlemap();
					if(tipo == 7) {
						larguraTelaFc();
					}
				}
			});
		}
	});
	$('.local li a').live('click',function(){
		var loja = $(this).attr("loja");
		var tipo = $(this).attr("tipo");
		var linhac = $(this).attr("linhac"); 
		var linhas = $(this).attr("linhas"); 
		var linhal = $(this).attr("linhal");  
		$('.loja').hide();
		$('.fimloja').hide();
		$.ajax({
			type:'GET',
			url:'lj_loja_new.php',
			data: "tipo="+tipo+'&linhac='+linhac+'&linhas='+linhas+'&linhal='+linhal+'&loja='+loja,
			success: function(data){
				$('ul.loja').empty().html(data).attr('id',tipo+linhac+linhas+linhal);
				plus = $('ul.loja').outerWidth(true);
				incrementSize4 = incrementSize3 + plus + 2;
				$('#content').width(incrementSize4);
				$('ul.loja').show();
				googlemap();
			}
		});
	});
	$('#tipo li a').click(function(){
		$('#tipo li a').css('color', '#666');
		$(this).css('color', '#fff');
	});
	$('.country li a').live('click',function(){
		$('.country li a').css('color', '#666');
		$(this).css('color', '#fff');
	});
	$('.estado li a').live('click',function(){
		$('.estado li a').css('color', '#666');
		$(this).css('color', '#fff');
	});
	$('.local li a').live('click',function(){
		$('.local li a').css('color', '#666');
		$(this).css('color', '#fff');
	});
});

//****************************
//GALLERIA********************
var mycarousel_itemList0001 = [
	{ image: "uploads/lojas/0001/1.jpg", link: "gallery.php?id=0001&image=1" },
	{ image: "uploads/lojas/0001/2.jpg", link: "gallery.php?id=0001&image=2" },
	{ image: "uploads/lojas/0001/3.jpg", link: "gallery.php?id=0001&image=3" },
	{ image: "uploads/lojas/0001/4.jpg", link: "gallery.php?id=0001&image=4" },
	{ image: "uploads/lojas/0001/5.jpg", link: "gallery.php?id=0001&image=5" },
	{ image: "uploads/lojas/0001/6.jpg", link: "gallery.php?id=0001&image=6" },
	{ image: "uploads/lojas/0001/7.jpg", link: "gallery.php?id=0001&image=7" },
	{ image: "uploads/lojas/0001/8.jpg", link: "gallery.php?id=0001&image=8" },
	{ image: "uploads/lojas/0001/9.jpg", link: "gallery.php?id=0001&image=9" },
	{ image: "uploads/lojas/0001/10.jpg", link: "gallery.php?id=0001&image=10" },
	{ image: "uploads/lojas/0001/11.jpg", link: "gallery.php?id=0001&image=11" },
	{ image: "uploads/lojas/0001/12.jpg", link: "gallery.php?id=0001&image=12" },
	{ image: "uploads/lojas/0001/13.jpg", link: "gallery.php?id=0001&image=13" },
	{ image: "uploads/lojas/0001/14.jpg", link: "gallery.php?id=0001&image=14" },
	{ image: "uploads/lojas/0001/15.jpg", link: "gallery.php?id=0001&image=15" },
	{ image: "uploads/lojas/0001/16.jpg", link: "gallery.php?id=0001&image=16" },
	{ image: "uploads/lojas/0001/17.jpg", link: "gallery.php?id=0001&image=17" },
	{ image: "uploads/lojas/0001/18.jpg", link: "gallery.php?id=0001&image=18" },
	{ image: "uploads/lojas/0001/19.jpg", link: "gallery.php?id=0001&image=19" },
	{ image: "uploads/lojas/0001/20.jpg", link: "gallery.php?id=0001&image=20" }
];		            
jQuery(document).ready(function() {
	jQuery('.gallery_0001').galleria({
		dataSource: mycarousel_itemList0001,
		imageCrop: false,
		width: 300,
		height: 350,
		imageTimeout: 50000,
		autoplay: 3000,
		preload: 2,
		minScaleRatio: 1,
		debug: false,
		showCounter: false,
		thumbnails: false,
		idleMode: false,
		show_imagenav: true,
		swipe: false,
		dummy: 'js/fullscreen/no-image.png'
	});
});
//GALLERIA********************
//****************************
function larguraTelaFc(){	
	$(".it_cont").each(function() {
		larguraDiv = larguraDiv + $(this).width()+20;
	});
	$('#content').width(larguraDiv);
}
</script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script>
function googlemap() {
	var pTag1 = document.getElementById('map');
	if(pTag1 != null){
		var myLatlng = new google.maps.LatLng( +pTag1.getAttribute('lat'), +pTag1.getAttribute('lng') );
		var myOptions = {
				zoom: 18,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.SATELLITE //ROADMAP 
		}
		var map = new google.maps.Map(document.getElementById('map'), myOptions);
		var osklenpin = new google.maps.MarkerImage('img/lojas/osklen_pin.png');
		var shadow = new google.maps.MarkerImage('img/lojas/shadow50.png',
				new google.maps.Size(37, 32),
				new google.maps.Point(0,0),
				new google.maps.Point(12, 34));
		var myLatlng = new google.maps.LatLng( +pTag1.getAttribute('lat'), +pTag1.getAttribute('lng') );
		var storemark = new google.maps.Marker({
				position: myLatlng,
				map: map,
				icon: osklenpin,
				shadow: shadow
		});
	}
}	
</script> 
<?php include 'zendesk.php'; ?>
</head>

<body>
<div id="main">
  <?php include "header_menu.php"; ?>
  <div id="content">
    <!-- -->
    <div id="content_its" class="it_cont it_t_300">
      <div id="content_its_sld" class="gallery_0001"></div>
      <div id="content_its_txt"></div>
    </div>
    <!-- --> 
    <!-- -->
    <div id="content_its" class="it_cont it_t_263 lojas_it" style="width:185px;">
      <div id="content_its_sld">
        <ul id="tipo">
          <li> <a rel="1">Flagship Stores</a></li>
          <li> <a rel="2">Showrooms</a></li>
          <li> <a rel="3">Lojas</a></li>
          <li> <a rel="4">International Sales</a></li>
          <li> <a rel="5">International Distributors</a></li>
          <!--<li> <a rel="6">Osklen Accessories</a></li>-->
          <li> <a href="http://osklen.com/trueosklenriva/onde-encontrar.php?p=multi" target="_blank">Revendedores Autorizados</a></li>
        </ul>
      </div>
      <div id="content_its_txt"></div>
    </div>
    <!-- --> 
    <!-- -->
    <div id="content_its" class="it_cont it_t_263 lojas_it" style="width:auto;">
      <div id="content_its_sld" style="width:auto;">
        <ul class="country hentry" style="display:none; margin-left:0px;">
        </ul>
      </div>
      <div id="content_its_txt"></div>
    </div>
    <!-- --> 
    <!-- -->
    <div id="content_its" class="it_cont it_t_263 lojas_it" style="width:auto;">
      <div id="content_its_sld" style="width:auto;">
        <div class="estado hentry" style="display:none; margin-left:0px;"></div>
      </div>
      <div id="content_its_txt"></div>
    </div>
    <!-- --> 
    <!-- -->
    <div id="content_its" class="it_cont it_t_263 lojas_it" style="width:auto;">
      <div id="content_its_sld" style="width:auto;">
        <ul class="local hentry" style="display:none; margin-left:0px;">
        </ul>
      </div>
      <div id="content_its_txt"></div>
    </div>
    <!-- --> 
    <!-- -->
    <div id="content_its" class="it_cont it_t_263 lojas_it" style="width:490px;">
      <div id="content_its_sld">
        <ul class="loja hentry" style="display:none; margin-left:0px;">
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
