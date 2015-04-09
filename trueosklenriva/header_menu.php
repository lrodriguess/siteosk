<?php 

		if (isset($lang)) { 
			if ($lang == "") { $lang = "pt"; }; 
		};
?>

<div id="header">
    <div id="header_content">
      <div id="logo">
      	<h1><a href="/site<?php if ($lang == "en") { echo "_en"; } elseif ($lang == "jp") { echo "_jp"; }; ?>.php" title="Osklen">Osklen</a></h1>
      </div>
       <?php if ($lang == "en") { 
	  		$linkie="http://goo.gl/90afiD"; //instituto-e inglês
		} elseif ($lang == "jp") { 
			$linkie="http://goo.gl/90afiD"; //instituto-e inglês 
		} else { 
			$linkie="http://goo.gl/o9QoUi"; //instituto-e port 
		}; ?>
      <div id="instituto_e"><a href="<?=$linkie?>" title="instituto-e" target="_blank">Osklen</a> </div>
      
	  <?php /* if ($lang == "en") { ?><div id="aspen"><a href='http://goo.gl/HfIDq1' title='Aspen Snowmass' target='_blank'>Aspen Snowmass</a></div><?php }  */ ?>
      
      <div id="menu">
        <ul>
          
          <?php if ($lang == "en") { ?>
 	           <li><a href="/inhotim_en.php" title="football series">Inhotim</a></li>
             <li><a href="/football_en.php" title="football series">Football Series</a></li>
 	          <li><a href="/lojas_en.php" title="Stores">Stores</a></li>
              <li><a href="/oskarmetsavaht_en.php" title="Oskar Metsavaht">Oskar Metsavaht</a></li>
              <li><a href="http://goo.gl/vWFQiq" target="_blank" title="OM.art">OM.art</a></li>
              <li><a href="/press_en.php" title="Press">Press</a></li>
              <li><a href="/work-with-us.php" title="Work with us">Work with us</a></li>
              <li><a href="/shop-by-phone.php" title="Shop by phone">Shop by phone</a></li>
              <li><a href="/contato_en.php" title="Contact">Contact</a></li>
		  <?php } elseif ($lang == "jp") { ?>
              <li><a href="http://www.hpfrance.com/Blog/osklen/" target="_blank" title="Blog">ブログ</a></li>
 	          <!-- FAZER --><li><a href="/football_jp.php" title="football series">サッカーシリーズ</a></li>
 	      	  <!-- FAZER --><li><a href="/5521rio_jp.php" title="5521 Rio">5521リオ</a></li>
 	          <!-- FAZER --><li><a href="/intothemountains_jp.php" title="Into the mountains">山に</a></li>
              <!-- FAZER --><li><a href="/lojas_jp.php" title="Stores">店舗</a></li>
              <!-- FAZER --><li><a href="/oskarmetsavaht_jp.php" title="Oskar Metsavaht">オスカル・メツァヴァト</a></li>
             <!-- <li><a href="http://goo.gl/vWFQiq" target="_blank" title="OM.art">OM.art</a></li>-->
             <!-- <li><a href="http://osklen.com/jp/?cat=3" target="_blank" title="Press">報道機関</a></li> -->
              <li><a href="/contato_jp.php" title="Contact">コンタクト</a></li>
              <li class="cat-store"><a href="http://www.hpfmall.com/shop/shops/item/list/category_id/366" target="_blank" title="Shop Online"><span>ウェブ ショップ</span></a></li>              
          <?php } else { ?>
 	         <li><a href="/inhotim.php" title="Inhotim">Inhotim</a></li>
 	         <li><a href="/football.php" title="football series">Football Series</a></li>
 	         <!-- <li><a href="/5521rio" title="5521 Rio">5521 Rio</a></li> -->
		  	  <li><a href="/lojas" title="Lojas">Lojas</a></li>
              <li><a href="oskarmetsavaht.php" title="Oskar Metsavaht">Oskar Metsavaht</a></li>
              <li><a href="http://goo.gl/7lxyKc" target="_blank" title="Neo Community">Neo Community</a></li>
              <li><a href="http://goo.gl/vWFQiq" target="_blank" title="OM.art">OM.art</a></li>
              <li><a href="/press" title="Press">Press</a></li>
              <li><a href="/contato" title="Contato">Contato</a></li>
              <li class="cat-store"><a href="http://goo.gl/oq9g8c" target="_blank" title="Osklen Store"><span>osklen</span> store</a></li>
          <?php } ?>
          
        </ul>
      </div>
    </div>
  </div>

<?php /*
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
*/ ?>

<?php include 'analytics.php' ?>