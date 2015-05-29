<?php

//$pasta = 'http://osklen.com/ss14lookbook2a/masc/'; //PASTA ATUAL DA GALERIA
$pasta = '';
if ($lang = '') { $lang = 'pt'; };

	$pastaRet = '/site.php'; //PASTA DE RETORNO BOTÃO FECHAR


include "uploads/gallery/conteudo".$_GET['ID'].".php";


$image = $_GET['image'];
$id = $_GET['id'];

if($image == '') {
	$image = 0;
}
if($id == '') {
	$id = 1;
}
?>
<html xmlns:fb="http://ogp.me/ns/fb#" dir="ltr" lang="en-US" style="height: 100%; overflow: hidden; margin: 0px; padding: 0px;">
<head>
<meta charset="UTF-8">
<meta property="og:image" content="http://osklen.com/wp-content/uploads/2013/itm/fem/lb_itm_f_01.jpg">
<title>Osklen <?=$titulo?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="http://osklen.com/js/galleria.fullscreen.css" id="galleria-theme">
<link rel="stylesheet" type="text/css" media="all" href="http://osklen.com/style.css">
<script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.pt_BR.M2iSOW6qgns.O/m=plusone/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AItRSTPC2iu8gYgwsWhWum3aX2vtvmyjtw/cb=gapi.loaded_0" async></script>
<script type="text/javascript" async src="http://platform.twitter.com/widgets.js"></script>
<script id="facebook-jssdk" src="//connect.facebook.net/en_US/all.js#xfbml=1"></script>
<script type="text/javascript" async src="https://apis.google.com/js/plusone.js" gapi_processed="true"></script>
<script type="text/javascript" src="http://osklen.com/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="http://osklen.com/js/galleria-1.2.5.min.js"></script>
<script type="text/javascript">
var fullscreen = [
//******************************
//ARRAY DAS IMAGENS - INICIO LOOP

<?php foreach($galeria as $foto => $value) { ?>
	{image: 'uploads/gallery/<?=$galeriapasta;?>/<?=$value;?>', thumb: 'uploads/gallery/<?=$galeriapasta;?>/thumb/<?=$value;?>', descricao: '' , produtos: [ ], fotos: [ { foto: '' } ] },	
<?php } ?>

//ARRAY DAS IMAGENS - FIM LOOP
//******************************
//******************************
//IMAGENS DE EXEMPLO - APAGAR
//		{image: 'http://osklen.com/wp-content/uploads/2013/itm/fem/lb_itm_f_02.jpg', thumb: 'http://osklen.com/wp-content/uploads/2013/itm/fem/thumb/lb_itm_f_02.jpg', descricao: '' , produtos: [ { ref: '37926', desc: 'camisa print black mountain', store: '0' },{ ref: '37412', desc: 'saia tricot mix collection', store: '0' },{ ref: '37193', desc: 'bolsa small bicolor e pelo', store: '0' },{ ref: '38022', desc: 'sapato salto pelo', store: '0' } ], fotos: [ { foto: '' } ] },

//		{image: 'http://osklen.com/wp-content/uploads/2013/itm/fem/lb_itm_f_03.jpg', thumb: 'http://osklen.com/wp-content/uploads/2013/itm/fem/thumb/lb_itm_f_03.jpg', descricao: '' , produtos: [ { ref: '', desc: '', store: '0' },{ ref: '', desc: '', store: '0' },{ ref: '', desc: '', store: '0' },{ ref: '', desc: '', store: '0' } ], fotos: [ { foto: '' } ] },

//		{image: 'http://osklen.com/wp-content/uploads/2013/itm/fem/lb_itm_f_04.jpg', thumb: 'http://osklen.com/wp-content/uploads/2013/itm/fem/thumb/lb_itm_f_04.jpg', descricao: '' , produtos: [ { ref: '', desc: '', store: '0' },{ ref: '', desc: '', store: '0' },{ ref: '', desc: '', store: '0' },{ ref: '', desc: '', store: '0' } ], fotos: [ { foto: '' } ] },

//		{image: 'http://osklen.com/wp-content/uploads/2013/itm/fem/lb_itm_f_05.jpg', thumb: 'http://osklen.com/wp-content/uploads/2013/itm/fem/thumb/lb_itm_f_05.jpg', descricao: '' , produtos: [ { ref: '', desc: '', store: '0' },{ ref: '', desc: '', store: '0' },{ ref: '', desc: '', store: '0' },{ ref: '', desc: '', store: '0' } ], fotos: [ { foto: '' } ] },
//
//******************************
];
$(document).ready(function(){
	Galleria.loadTheme('http://osklen.com/js/galleria.fullscreen.min.js'); 
	$('#framed'+<?php echo $id ?>).galleria({
		dataSource: fullscreen,
		width: 1280,
		height: 900,
		imageTimeout: 500000,
		preload: 2,
		showImagenav: true,
		debug: false,
		imageCrop: false,
		swipe: true,
		show: <?php echo $image ?>,
		dummy: 'http://osklen.com/img/no-image.png'	
	});
	
	Galleria.ready(function(options) {
	
		this.bind('image', function(e) {
			
			$('#ref_desc, #media, #extras').html('');
			
			function move(){
				var imagem = $(e.imageTarget).width();
				var tamanho = (imagem/2) +20
                $('#produtos').css('margin-left', tamanho);
				$('#fotosadicionais').css('margin-right', tamanho);
				$('#store').css('margin-left', tamanho);
			}
			
			function regallery(){
				var srcBig = fullscreen[e.index].image;
				var srcSmall = fullscreen[e.index].fotos[idx].foto;
				fullscreen[e.index].fotos[idx].foto = srcSmall.replace( srcSmall, srcBig );
				fullscreen[e.index].image = srcBig.replace( srcBig, srcSmall);
				$('#framed'+<?php echo $id ?>).galleria({
					dataSource: fullscreen,
					width: 1280,
					height: 900,
					imageTimeout: 500000,
					preload: 2,
					showImagenav: true,
					debug: false,
					imageCrop: false,
					swipe: true,
					show: e.index,
					dummy: 'http://osklen.com/img/no-image.png'	
				});	
			}
			
			$(window).resize(function(){
				move();
            });
			
			move();
			if ( fullscreen[e.index].fotos[0].foto != '' ){
				for( i = 0; i < fullscreen[e.index].fotos.length; i++){
					$('#extras').append('<li class = "'+i+'"><img src="'+fullscreen[e.index].fotos[i].foto+'" alt="" /></li>');
				}
			}
			
			$('#store ul').empty();
			$('.itens').hide();
			if (fullscreen[e.index].descricao != '') {
				$('#ref_desc').append('<p class="refs_title">'+fullscreen[e.index].descricao+'</p>');
			};
			
			for( i = 0; i < fullscreen[e.index].produtos.length; i++){
				refer = fullscreen[e.index].produtos[i].ref.split('-');
				$('#ref_desc').append('<p>'+refer[0]+' '+fullscreen[e.index].produtos[i].desc+'</p>');
				if (fullscreen[e.index].produtos[i].store != '0') {
					$('.itens').show();
					$('#store ul').append('<li class = "'+i+'"><a href="http://store.osklen.com/produto/r'+refer[0]+'" target="_blank"><img src="http://store3.osklen.com/loja/Geral/LinxShop/Fotos/thumbs/'+fullscreen[e.index].produtos[i].ref+'-'+fullscreen[e.index].produtos[i].store+'-01_K.png" alt="" /><p>REF: '+refer[0]+'</p></li>');
				};
			}
			
			$('#media').append('<li style="margin:5px 0 0 0"><g:plusone size="medium" href="<?php echo $pasta; ?>?id=<?php echo $id ?>&image='+e.index+'"></g:plusone></li><br />');
			$('#media').append('<li style="margin:24px 0 0 0;float:none"><fb:like href="<?php echo $pasta; ?>?id=<?php echo $id ?>&image='+e.index+'" send="false" layout="button_count" width="48" show_faces="false"></fb:like></li><br />');
			$('#media').append('<li style="margin:0px"><a class="twitter-share-button" href="http://twitter.com/share" data-url="<?php echo $pasta; ?>?id=<?php echo $id ?>&image='+e.index+'" data-via="osklen" data-count="none" data-text="Confira: "></a></li>');
			
			gapi.plusone.go();
	
			FB.XFBML.parse();
			
			twttr.widgets.load();
				
			$('#extras li').click(function(){
				idx = $(this).attr('class');
				regallery();
			});
			
	
		});		
		
	});
	
        var id = <?php echo $id ?>;
            if(id != "937") {
                //Google Plus function
                window.___gcfg = {lang: 'pt-BR'};
                (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();

                //Facebook function
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) {return;}
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));

                //Twitter function
                (function() {
                    var s = document.createElement('SCRIPT');  
                    var c = document.getElementsByTagName('script')[0];  
                    s.type = 'text/javascript';  
                    s.async = true;
                    s.src = 'http://platform.twitter.com/widgets.js';  
                    c.parentNode.insertBefore(s, c);  
                })();
            }
	
});
</script>
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


<div id="fb-root"></div>
<a id="close" href="<?php echo $pastaRet; ?>" class="close"></a>
<?php /** / ?><div id="store">
  <div class="itens"><img src="http://osklen.com/wp-content/themes/osklen//img/itens-store.png" alt="" /></div>
  <ul id="itens">
  </ul>
</div>
<div id="produtos">
  <div id="ref_desc"></div>
  <ul id="media">
  </ul>
</div><?php /**/ ?>
<div id="fotosadicionais">
  <ul id="extras">
  </ul>
</div>
<div id="framed<?php echo $id ?>"></div>
</body>
</html>