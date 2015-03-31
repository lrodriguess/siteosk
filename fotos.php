<?php 

/* variaveis
pasta fotos
numero galeria
lergura thumb
array com nomes das imagens

*/

if ($titulo_en=="") { 
	$titulo_en = $titulo;
};

echo ("<script type='text/javascript'> var mycarousel_itemList".$galeriapasta." = [");

$i=0;
foreach($galeria as $foto => $value) { 
	echo ("{ image: 'uploads/gallery/".$galeriapasta."/350/".$value."', link: 'gallery.php?ID=".$galeriapasta."&image=".$i."' },");
	$i++;
 }

echo ("];		            
jQuery(document).ready(function() {
	jQuery('.gallery_".$galeriapasta."').galleria({
		dataSource: mycarousel_itemList".$galeriapasta.",
		imageCrop: false,
		width: ".$largurathumb.",
		height: 350,
		imageTimeout: 500000,
		preload: 2,
		minScaleRatio: 1,
		debug: false,
		showCounter: false,
		thumbnails: false,
		idleMode: false,
		show_imagenav: ".$setinhas.",
		swipe: false,
		dummy: 'js/fullscreen/no-image.png'
	});
});



</script>");

?>
    <div id="content_its" class="it_cont" style="width:<?=$largurathumb?>px">
      <div id="content_its_sld" class="gallery_<?=$galeriapasta?>"></div>
      <div id="content_its_txt">
        <h2><?php if($lang=="en") { echo $titulo_en; } else { echo $titulo; } ?></h2>
        <p class="lilgrey"><?php if($lang=="en") { ?>(click on image for fullscreen) <?php } else if($lang=="jp") { ?>(click on image for fullscreen) <?php } else { ?>(clique na imagem para ampliar)<?php } ?></p>
      </div>
    </div>
    <!-- -->