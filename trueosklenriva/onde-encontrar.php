<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META name="description" content="">
<META name="keywords" content="">
<link rel="stylesheet" type="text/css" href="css/principal.css"/>
<title>TRUE OSKLEN RIVA</title>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.jscroll.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="js/jquery.infieldlabel.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript">
$(document).ready(function(){	
	if(navigator.userAgent.indexOf('Mac') > 0) {
		$('body').addClass('classMac');
	}
	
	$('.setaTop').click(function() {
		irPara('BODY');
	});
});
function abrir(local){
	if(local == '#manifesto') {
		$('#multi').hide();
		$('#manifesto').fadeIn();
	}else{
		$('#manifesto').hide();
		$('#multi').fadeIn();
	}
	irPara(local);
}
function irPara(local){
	$(window).scrollTo(local, 700);
}

////
var urlParams;
(window.onpopstate = function () {
    var match,
        pl     = /\+/g,  // Regex for replacing addition symbol with a space
        search = /([^&=]+)=?([^&]*)/g,
        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
        query  = window.location.search.substring(1);

    urlParams = {};
    while (match = search.exec(query))
       urlParams[decode(match[1])] = decode(match[2]);
})();

function abremulti() {
	if(urlParams["p"] == 'multi') {
		abrir('#multi');
	}
}


</script>
</head>
<body onload="abremulti();">
<?php include '../analytics.php' ?>
<div id="main">
  <div id="principal">
    <div id="header">
      <div id="top-barra">
        <div id="top-icon"></div>
        <div id="menu">
          <ul>
            <li><a href="index.php?local=historia" title="História">História</a></li>
            <li><a href="index.php?local=riva-insta" title="#Trueosklenriva">#Trueosklenriva</a></li>
            <li><a href="onde-encontrar.php" title="Denuncie / Onde encontro originais">Onde comprar</a></li>
            <li><a href="http://osklen.com" title="osklen.com" target="_blank">osklen.com</a></li>
            <li><a href="http://store.osklen.com/shoes.html" title="Osklen Online Store" target="_blank">Osklen Online Store</a></li>
          </ul>
        </div>
      </div>
      <div id="top" class="topo-interno">
        <div id="logo-int">
          <h1><a href="index.php" title="TRUE OSKLEN RIVA">TRUE OSKLEN RIVA</a></h1>
        </div>
        <div id="top-int">
          <h2>onde comprar <span>originais</span></h2>
          <p>A Osklen está atenta a questão da pirataria e utiliza todas as ferramentas disponíveis para combater esse mercado criminoso. Para auxiliar você a não ser vítima desses mal-feitores, estão disponíveis abaixo os pontos de venda oficiais Osklen, incluindo as lojas físicas da marca e revendedores autorizados. Fique atento. Na internet, o único site que oferece produtos originais é a loja online oficial Osklen, que você acessa em <strong><a href="http://store.osklen.com" title="Osklen Store" target="_blank">store.osklen.com</a></strong>.</p>
          <ul>
            <li><a title="sobre falsificação" onclick="abrir('#manifesto')">sobre falsificação</a></li>
            <li><a href="http://osklen.com/lojas" title="lojas" target="_blank">lojas osklen</a></li>
            <li><a title="revendedores autorizados" onclick="abrir('#multi')">revendedores autorizados</a></li>
            <li><a href="http://store.osklen.com/" title="loja online" target="_blank">loja online</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="manifesto">    
    <div id="seta-top" class="interno setaTop">
      <div id="seta-top2"></div>
    </div>
      <h2>sobre falsificação</h2>
      <p>Lançado em 2006, o Riva apresentou uma nova proposta de tênis entre os modelos exclusivamente esportivos da época. Foi idealizado por Oskar Metsavaht como um calçado para andar do asfalto às pedras do Arpoador. Não à toa, o Riva se tornou o tênis mais conhecido da Osklen e até hoje, a cada coleção, ganha novas versões, com diferentes estampas, cores e materiais.</p>
      <p>Marca admirada no Brasil e no exterior por seu design e história, a Osklen é vítima constante de falsificadores que tentam se aproveitar do valor que nossa equipe construiu e mantém ao longo de mais de 20 anos. Sendo um dos itens icônicos da marca, o Riva é a peça mais imitada, replicada e pirateada de nossas coleções.</p>
      <p>Estamos em combate diário para proteger nossos produtos, vendas e principalmente nossos clientes deste comércio criminoso, com pesado investimento em múltiplas ações de combate à pirataria.</p>
      <p>VOCÊ TAMBÉM PODE EVITAR SER VÍTIMA DESSE COMÉRCIO ANTIÉTICO E ILEGAL.</p>
      <p>Os tênis Riva e todos os outros modelos da Osklen só podem ser encontrados nas mais de 70 lojas da marca no Brasil e no exterior, ou nas lojas multimarcas autorizadas (confira a lista em REVENDEDORES AUTORIZADOS).</p>
      <p>A venda online é exclusiva* da nossa loja oficial (<a href="http://store.osklen.com">store.osklen.com</a>). NENHUM perfil de Facebook, Instagram ou qualquer outra rede social vende produtos originais. NENHUMA página do Mercado Livre, OLX ou outros afins, que disponibilizam vários modelos em diversos tamanhos, vende produtos originais.</p>
      <p>NÃO EXISTE venda direta de fábrica, nem mesmo de produtos de "ponta de estoque" ou com "pequenos defeitos", como alguns costumam argumentar. NÃO ACREDITE.</p>
      <p>Não compre produtos em canais de venda que não estejam na lista oficial.</p>
      <p>Se quiser e puder, nos ajude enviando sua denúncia para <a href="mailto:online@osklen.com.br">online@osklen.com.br</a>.<br>
        A Osklen respeita a sua privacidade e garante o seu anonimato.</p>
      <p class="lista">CONFIRA NOSSOS CANAIS DE COMUNICAÇÃO, LOJAS E PARCERIAS OFICIAIS ABAIXO: </p>
      <p class="lista">Endereço lojas físicas e multimarcas autorizadas:  <a href="http://osklen.com/lojas">osklen.com/lojas</a></p>
      <p class="lista">Loja online: <a href="http://store.osklen.com">store.osklen.com</a> , * itens selecionados em <a href="http://www.farfetch.com/br/shopping/women/boutique-osklen/items.aspx?ffref=hd_sch_swb#ps=1&amp;pv=60&amp;oby=5">farfetch.com</a> , <a href="http://www.shop2gether.com.br/catalog/category/view/s/osklen/id/6387/">shop2gether.com.br</a></p>
      <p class="lista">Facebook: <a href="http://fb.com/osklen">facebook.com/osklen</a> , <a href="http://fb.com/osklenusa">facebook.com/osklenusa</a> , <a href="http://fb.com/osklenjapan">facebook.com/osklenjapan</a></p>
      <p class="lista">Instagram: <a href="http://instagram.com/osklen">@osklen</a> , <a href="http://instagram.com/osklencollection">@osklencollection</a> , <a href="http://instagram.com/osklensurfing">@osklensurfing</a></p>
      <p class="lista">Twitter: <a href="http://twitter.com/osklen">twitter.com/osklen</a> , <a href="http://twitter.com/osklenusa">twitter.com/osklenusa</a></p>
    </div>
    <div id="multi">    
    <div id="seta-top" class="interno setaTop">
      <div id="seta-top2"></div>
    </div>MULTIMARCAS AUTORIZADAS<br>
      <br>
      <div id="multi_coluna">
        <p><strong>ACRE</strong><br>
          CRUZEIRO DO SUL - CABANAMIX<br>
          RIO BRANCO - IRIS TAVARES</p>
        <p><strong>ALAGOAS</strong><br>
          BARRA DE SÃO MIGUEL - KENOA RESORT<br>
          MACEIÓ - CLUB LION</p>
        <p><strong>AMAZONAS</strong><br>
          MANAUS - ARSENAL</p>
        <p><strong>BAHIA</strong><br>
          ALAGOINHAS - CLEAN<br>
          BARREIRAS - ALLA Z<br>
          EUNAPOLIS - TRIBOS<br>
          FEIRA DE SANTANA - ARANÃS<br>
          FEIRA DE SANTANA - NOMAD<br>
          GUANAMBI - ATRATIVA<br>
          IPIRA - CASA SAO FRANCISCO<br>
          ITABUNA - LOOK MULTIMARCAS<br>
          JACOBINA - MODERN HOUSE<br>
          JEQUIÉ - RAIO DO SOL<br>
          LIVRAMENTO DE NOSSA SENHORA - VIA ÚNICA<br>
          LUIS EDUARDO MAGALHAES - ALLA Z<br>
          PARIPIRANGA - KATIA NOVIDADES<br>
          PAULO AFONSO - EMPÓRIO MARIA BONITA<br>
          PORTO SEGURO - FORMA<br>
          PORTO SEGURO - TRIBAL<br>
          SANTO ANTONIO DE JESUS - DIX ESTILO<br>
          SENHOR DO BONFIM - COMETA MODAS<br>
          TEIXEIRA DE FREITAS - BAHIA BRAZIL<br>
          VITÓRIA DA CONQUISTA - VIA FERREA</p>
        <p><strong>CEARÁ</strong><br>
          FORTALEZA - ANAMAC<br>
          FORTALEZA - DUE STORE<br>
          FORTALEZA - JEF<br>
          JIJOCA DE JERICOACOARA - VILLA CHIC BOUTIQUE<br>
          JUAZEIRO DO NORTE - BETZ VESTIMENT<br>
          SOBRAL - YOUNGS</p>
        <p><strong>DISTRITO FEDERAL</strong><br>
          BRASILIA - A CARA DO PAI<br>
          BRASILIA - CATS MODA JOVEM<br>
          BRASILIA - LARA MARRA<br>
          BRASILIA - MARIA PRETA<br>
          BRASILIA - STILO CHIC<br>
          BRASILIA - LOS ROCKERS<br>
          BRASILIA - ICLOTHES</p>
        <p><strong>ESPÍRITO SANTO</strong><br>
          ALEGRE - BOUTIQUE TULIPA<br>
          ANCHIETA - SANGELO STORE<br>
          ARACRUZ - ESPACO ORIGINAL<br>
          BARRA DE SAO FRANCISCO - MAR E CIA<br>
          CACHOEIRO DE ITAPEMIRIM - FORM<br>
          CACHOEIRO DE ITAPEMIRIM - SEGUNDO PISO<br>
          CARIACICA - LOTUS MULTIMARCAS<br>
          CARIACICA - MAR E CIA<br>
          COLATINA - CLAUDIA MULTI.COM<br>
          GUACUI - BARONESA BOUTIQUE<br>
          GUARAPARI - ESPAÇO ORIGINAL<br>
          ICONHA - STRUTURA FASHION<br>
          JERONIMO MONTEIRO - ANAJULLY<br>
          LINHARES - LIXO BOUTIQUE<br>
          MARATAÍZES - BOUTIQUE =4<br>
          NOVA VENECIA - DELUXE BOUTIQUE<br>
          PANCAS - CLUBE DA MODA<br>
          PIUMA - SULLE BOUTIQUE<br>
          RIO NOVO DO SUL - VINCULOS MULTIMARCAS<br>
          SANTA MARIA DE JETIBA - CASA POMMERN<br>
          SÃO GABRIEL DA PALHA - JANETE CASSARO<br>
          SÃO MATEUS - ALFORRIA BOUTIQUE<br>
          SANTA TERESA - BOUTIQUE LUXUS<br>
          SERRA - ARMARIO FOR MEN<br>
          SERRA	- SURFLAND II<br>
          SERRA	- SURFLAND III<br>
          VARGEM ALTA	BARGUEM<br>
          VILA VELHA - BELIEVE<br>
          VILA VELHA - BINTANG<br>
          VILA VELHA - MARCOS SHOES</p>
        <p><strong>GOIÁS</strong><br>
          ANAPOLIS - APARATTO<br>
          CAIAPONIA - LOJAS LIDERANÇA<br>
          CALDAS NOVAS - METRÓPOLE<br>
          CALDAS NOVAS - TRIBU<br>
          CATALAO - RAMAL Z<br>
          CERES - ILZA ARANHA<br>
          CRISTALINA - KORPO &amp; KOR<br>
          GOIANESIA - LOJA OLIVA<br>
          GOIANESIA - MAREZIA<br>
          GOIATUBA - CLOVIS CALÇADOS<br>
          GOIATUBA - MG FASHION<br>
          ITABERAI - MARCILENE CALÇADOS<br>
          ITUMBIARA - CLOVIS STORE<br>
          ITUMBIARA - LUA E SOL<br>
          JARAGUA - MILLA MIX<br>
          JATAÍ - BLITZ<br>
          LUZIANIA - AUDACIA<br>
          PIRENOPOLIS - MAREZIA<br>
          POSSE - STYLO PROPRIO<br>
          QUIRINOPOLIS - SAINT TROPEZ<br>
          RIO VERDE - BURALLI<br>
          SÃO LUIS DE MONTES BELOS - BARATÃO STORE<br>
          URUACU - DESIGN FASHION</p>
        <p><strong>MARANHÃO</strong><br>
          BALSAS - LAÇOS E GRAVATAS -<br>
          IMPERATRIZ - DUOX CONCEPT<br>
          SÃO LUIS - CLUB DONNA MOÇA<br>
          SÃO LUIS - VOX CONCEPT<br>
          SÃO LUIS - VOX CONCEPT - SHOPPING ILHA</p>
        <p><strong>MATO GROSSO</strong><br>
          BARRA DO GARCAS - ART &amp; OFICIO<br>
          CÁCERES - DONDOCA<br>
          CAMPO VERDE - ELLA & ELLA BOUTIQUE<br>
          LUCAS DO RIO VERDE - DUO STORE - LUCAS<br>
          PRIMAVERA DO LESTE - IMAGEM FOR MEN<br>
          RONDONOPOLIS - HOMERO<br>
          SINOP - DUO STORE - SINOP<br>
          SORRISO - DUO STORE</p>
        <p><strong>MATO GROSSO DO SUL</strong><br>
          AQUIDAUANA - LOJA PRESS<br>
          CAMPO GRANDE - 350 FOR MEN<br>
          CAMPO GRANDE - SAGA<br>
          CORUMBÁ - SY MAN<br>
          DOURADOS - MAISA<br>
          JARDIM - CHEIRO DE MAÇÃ<br>
          SIDROLANDIA - NEIDE NOGUEIRA BOUTIQUE<br>
          TRES LAGOAS - MALU MODAS<br>
         <p><strong>MINAS GERAIS</strong><br>
         
          ANDRADAS - LOJA THOT<br>
          ABAETE - IMAGINARIUM<br>
          ALEM PARAIBA - VILA BASIC<br>
          ALFENAS - SILVIA RIBEIRO<br>
          ARAXÁ - ZULMA<br>
          ARCOS - PONTO E VÍRGULA<br>
          AREADO - KLIKOS CALÇADOS<br>
          ASTOLFO DUTRA - CIA DA MODA<br>
          ASTOLFO DUTRA - SHOP 120<br>
          BARBACENA - MODEL LOOK<br>
          BETIM - LURIEL<br>
          BETIM - XIQUITA BAKANA<br>
          BOA ESPERANCA - BOUTIK EXOTHYKUS<br>
          BOM DESPACHO - FLASH<br>
          CAMPO BELO - ZAP<br>
          CAMPOS ALTOS - GABRIELA BOUTIQUE<br>
          CAPELINHA - AUTONOMIA BOUTIQUE<br>
          CARANDAI - ESTILO MODAS<br>
          CARATINGA - MASCHMELLOW<br>
          CATAGUASES - SHOP 125<br>
          CONGONHAS - VOGUE-VIZZU<br>
          CONSELHEIRO LAFAIETE - AGUA NA BOCA<br>
          CONTAGEM - PARARAIO MULTIMARCAS<br>
          CURVELO - RUTH FIGUEIREDO<br>
          DIAMANTINA - TOWANDA BOUTIQUE<br>
          DIVINOPOLIS - JACKS<br>
          DIVINOPOLIS - PLANETA RADICAL<br>
          FORMIGA - WE BOUTIQUE<br>
          FRUTAL - GRIFFS<br>
          FRUTAL - MISTER SAN<br>
          GOVERNADOR VALADARES - ESTEREÓTIPO<br>
          GOVERNADOR VALADARES - ESTEREÓTIPO SHOPPING<br>
          GUANHAES - RABO DE SAIA<br>
          GUAXUPE - PURA EMOÇÃO<br>
          IBIRITE - ANJO VIP<br>
          IPATINGA - LEILA COSTA<br>
          ITABIRA - GET<br>
          ITABIRITO - TRIBUS<br>
          ITAJUBA - PRIME STORE<br>
          ITAUNA - FOX<br>
          JACUTINGA - NUCLEO<br>
          JANAUBA - ANGEL<br>
          JOAO MONLEVADE - XILIK BOUTIQUE<br>
          LAGOA DA PRATA - AH2O<br>
          LAGOA DA PRATA - CLAUDIA ESPORTES</p>
      </div>
      <div id="multi_coluna">
        <p><strong>MINAS GERAIS (CONT.)</strong><br>
          LAGOA DA PRATA - STYLLUS.<br>
          LAVRAS - ZAP<br>
          LEOPOLDINA - SHOP 125<br>
          MANHUACU - DIAMOND<br>
          MARIANA - GALY STORE<br>
          MATEUS LEME - EXPLORE<br>
          MOEMA - ESPAÇO SHOES<br>
          MOEMA - OPCAO MODAS<br>
          MONTE SIAO - NUCLEO<br>
          MONTES CLAROS - BOOTS & OUTWEAR<br>
          MONTES CLAROS - VIA ÚNICA<br>
          MURIAE - AMNÉSIA<br>
          NANUQUE - FICÇÃO<br>
          NEPOMUCENO - TROPICANA<br>
          NOVA ERA - LE CAMELLIA<br>
          NOVA PONTE - BLESS<br>
          NOVA SERRANA - ARISTOGATAS BOUTIQUE<br>
          OURO BRANCO - PETTRA<br>
          OURO FINO - NUCLEO<br>
          PARA DE MINAS - FOX<br>
          PARACATU - ELDORADO MAGAZINE<br>
          PASSOS - PHOTO BOUTIQUE<br>
          PATROCINIO - CONTATO BOUTIQUE<br>
          PATROCINIO - GRADE SAPATARIA<br>
          PEDRO LEOPOLDO - FOLIO<br>
          PITANGUI - TENDA<br>
          PIUMHI - BLUE MOON<br>
          POCOS DE CALDAS - MELA MELÃO<br>
          PONTE NOVA - VIA PÚBLICA<br>
          POUSO ALEGRE - BOUTIQUE KARECH<br>
          POUSO ALEGRE - KARECH<br>
          RIO POMBA - BANGALÔ<br>
          SÃO GOTARDO - BICHO DA TERRA<br>
          SÃO JOÃO DEL REI - MODEL LOOK<br>
          SÃO LOURENCO - TERRAL<br>
          SANTOS DUMONT - BÁSICA<br>
          SETE LAGOAS - BUANA<br>
          TEÓFILO OTONI - TEMPUS<br>
          TIMOTEO - LEILA COSTA<br>
          TRES CORACOES - PROFECIA<br>
          TRES MARIAS - EXTRAVAGANCIA MODAS<br>
          UBA - RADAR<br>
          UBERABA - CARNABY<br>
          UBERABA - CARNABY SHOPPING<br>
          UNAI - BLOOMIE S<br>
          VARGINHA - ZAP - VARGINHA<br>
          VICOSA - CORUM<br>
          VISCONDE DO RIO BRANCO - AMNÉSIA</p>
        <p><strong>PARÁ<br>
          </strong> BELEM - UP GRADE 2<br>
          CASTANHAL - MAG STORE</p>
        <p><strong>PARAÍBA<br>
        </strong> 
          BAYEUX - PARADA OBRIGATORIA<br>
          CAMPINA GRANDE - GUERRIER<br>
          JOAO PESSOA - BRANDS BRASIL<br>
          JOAO PESSOA - MANY CONCEPT<br>
          JOAO PESSOA - MDH<br>
          PATOS	- GUERRIER PATOS<br>
          SAPE - EMPORIO HOMEM<br>
          
        <p><strong>PARANÁ<br>
          </strong> APUCARANA - BALULAK<br>
          ARAPONGAS - FABIANA COSTA<br>
          BANDEIRANTES - BOUTIQUE SHOES<br>
          CAMPO MOURAO - RIVA E RIVA<br>
          CASCAVÉL - BRAZUCA CASCAVEL<br>
          CASCAVÉL - G1 MODAS<br>
          CIANORTE - CONTAINER CIANORTE<br>
          CORNELIO PROCOPIO - RENATA GRACIANO<br>
          FOZ DO IGUAÇU - BAMBINA CLASSIC<br>
          LONDRINA - FUZZO STORE<br>
          LONDRINA - HOW STORE<br>
          LONDRINA - RECOS BOUTIQUE<br>
          MARINGÁ - LOFT AVENIDA CENTER<br>
          MARINGA - LOFT CATUAI<br>
          MARINGA - LOFT CONCERT<br>
          PARANAVAI - GLEVIS PARANAVAI<br>
          PATO BRANCO - INTERMEZZO<br>
          TELEMACO BORBA - AGOTANI<br>
          TOLEDO - MOSCOVA MULTIMARCAS</p>
        <p><strong>PERNAMBUCO<br>
          </strong> 
          AFOGADOS DA INGAZEIRA - MALAGUETTA<br>
          CARUARU - PALCO<br>
          GARANHUNS - VIA G MAGAZINE<br>
          JABOATÃO DOS GUARARAPES - MONARCA<br>
          OURICURI - PINGO DE GENTE<br>
          PETROLÂNDIA - SÃO FRANCISCO<br>
          PETROLINA - CANARD-PETROLINA<br>
          PETROLINA - SR. HOMEM<br>
          RECIFE - AVESSO - E-BRIGADE<br>
          RECIFE - DONA SANTA<br>
          RECIFE - JULIANA BELTRÃO<br>
          RECIFE - LORDMAN<br>
          RECIFE - LORDMAN BOA VISTA<br>
          RECIFE - LORDMAN TACARUNA<br>
          TABIRA - AUTÊNTICA - TABIRA<br>
          VITÓRIA DE SANTO ANTÃO - WS MULTIMARCAS</p>
        <p><strong>PIAUÍ<br>
          </strong> PICOS - ARTIFICIUM<br>
          TERESINA - VILLAGE</p>
        <p><strong>RIO DE JANEIRO<br>
          </strong> ANGRA DOS REIS - PARABÓLICA - ANGRA<br>
          ARARUAMA - FORUP!<br>
          BARRA DO PIRAI - MARIA CHIC - BARRA<br>
          BARRA MANSA - GLESS<br>
          BOM JESUS DO ITABAPOANA - LAÇAROTE FASHION<br>
          CABO FRIO - FLY FASHION<br>
          CABO FRIO - FLY FASHION SHOP<br>
          CACHOEIRAS DE MACACU - MISTURA FINA<br>
          CARMO - REGIMAR BOUTIQUE<br>
          ITAGUAI - VON TOP FASHION - FILIAL<br>
          ITAOCARA - LAÇOS E GRAVATAS-ITAOCARA<br>
          ITAPERUNA - POLO<br>
          ITAPERUNA - VIVARÁ<br>
          MACAÉ - SOUL RIO<br>
          MACAE - BENEDITO<br>
          MANGARATIBA - RG 104<br>
          MARICÁ - EMPORIUM BRAZIL<br>
          NOVA FRIBURGO - OPERA Z<br>
          NOVA FRIBURGO - OPERA Z - FILIAL<br>
          NOVA IGUACU - SPORTMIX TOP SHOP NOVA IG<br>
          PARATI - MATA ATLANTICA 2<br>
          PETROPOLIS - TREND<br>
          RESENDE - GLESS RESENDE<br>
          RIO BONITO - KAUSA BOA<br>
          RIO CLARO - SEDUÇÃO BOUTIQUE<br>
          RIO DAS OSTRAS - COMUNITTÁ<br>
          RIO DE JANEIRO - IN BOX<br>
          RIO DE JANEIRO - SPORTMIX BANGU SHOP<br>
          RIO DE JANEIRO - SPORTMIX NOVA AMERICA<br>
          RIO DE JANEIRO - SPORTMIX PARK CPO GRANDE<br>
          RIO DE JANEIRO - SPORTMIX SHOP GRANDE RIO<br>
          RIO DE JANEIRO - SPORTMIX SHOP MADUREIRA 2<br>
          RIO DE JANEIRO - SPORTMIX WEST CAMPO GRAND<br>
          RIO DE JANEIRO - SYNDICATE<br>
          SÃO FIDELIS - J &amp; K FASHION<br>
          SANTO ANTONIO DE PADUA - EMPORIO<br>
          TRES RIOS - EMOTION<br>
          TRES RIOS - EMOTION MATRIZ<br>
          VALENCA - MARIA CHIC<br>
          VASSOURAS - SPACCIO<br>
          VOLTA REDONDA - EMPORIO DA MODA<br>
          VOLTA REDONDA - TRIBO</p>
        <p><strong>RIO GRANDE DO NORTE<br>
          </strong> MOSSORO - OFFICIALE<br>
          MOSSORO - UQ VESTIR<br>
          NATAL - DONNA DONNA<br>
          TIBAU DO SUL - PEDE JAMBO</p>
        <p><strong>RIO GRANDE DO SUL<br>
          </strong> CAXIAS DO SUL - MAGAZINE MODA VIVA<br>
          ERECHIM - PODIUN ESPORTE<br>
          ERECHIM - PODIUN ESPORTE II<br>
          GRAMADO - D GREGIO BOUTIQUE<br>
          PASSO FUNDO - LIFE STORE<br>
          PELOTAS - LOJA KRAUSE<br>
          RIO GRANDE - PARADOXO 2</p>
        <p><strong>RONDÔNIA<br>
          </strong> CACOAL - INTIMAMENTE<br>
          PORTO VELHO - LUNA VICCENZA SHOPPING<br>
          VILHENA - STAMPA CIA DA MODA</p>
        <p><strong>RORAIMA<br>
          </strong> BOA VISTA - MANTTOVANY<br>
          PORTO VELHO - DIVAS SAPATARIA</p>
      </div>
      <div id="multi_coluna">
        <p><strong>SÃO PAULO<br>
          </strong> ALTINOPOLIS - MARIA FLOR<br>
          AMERICANA - LUKAFE<br>
          AMERICANA - LUKAFE II<br>
          AMPARO - GIL MODAS<br>
          ARAÇATUBA - 718 MODAS<br>
          ARAÇATUBA - DUOMO<br>
          ARARAQUARA - EQUILIBRIO II<br>
          ARARAQUARA - ZAP ARARAQUARA<br>
          ARARAS - ADALA<br>
          ASSIS - CINDIRELA<br>
          ATIBAIA - ALWAYS SURF SHOP ATIBAIA<br>
          ATIBAIA - KARECH ATIBAIA 2<br>
          AVARE - DASDAN<br>
          BANANAL - GILDA MODAS<br>
          BARRETOS - LOOK BARRETOS<br>
          BARUERI - BARR<br>
          BARUERI - TIVOLLI SPORTS<br>
          BATATAIS - BAZAAR BATATAIS<br>
          BAURU - GABY SAMPAIO<br>
          BAURU - TANIA BOUTIQUE<br>
          BEBEDOURO - NEIVA BEBEDOURO 2<br>
          BERTIOGA - BALI EXPRESS II<br>
          BIRIGUI - BOX 2<br>
          BOTUCATU - YES HOMEM 2<br>
          BRAGANÇA PAULISTA - ALWAYS<br>
          BRODOWSKI - TOK FINAL<br>
          BROTAS - ARTE &amp; MANHA<br>
          CAPIVARI - VERA SARCINELLA<br>
          CATANDUVA - ATRIUM<br>
          CORDEIROPOLIS - PACTO MODA MASCULINA<br>
          CRUZEIRO - DÉCIMA QUINTA<br>
          FERNANDOPOLIS - BLUE COLORS<br>
          FRANCA - ACQUA IT FRANCA 2<br>
          FRANCA - SHED<br>
          FRANCA - THE OUTSIDERS<br>
          GUARATINGUETÁ - CIA DO ESPORTE<br>
          GUARULHOS - QUIVER BOARDSHOP<br />
          IBITINGA - INFORMALE<br>
          ILHABELA - SEA SIDE<br>
          ILHABELA - SEA SIDE 2<br>
          INDAIATUBA - LUNNA LOCA<br>
          IRACEMAPOLIS - OAHU<br>
          ITANHAEM - ZAAP<br>
          ITAPETININGA - NOVITAT MASC<br>
          ITAPIRA - ALWAYS SURF SHOP<br>
          ITATIBA - LUI<br>
          ITU - FELICITÁ<br>
          ITUVERAVA - BOUTIQUE NANA<br>
          JABOTICABAL - DIODATO<br>
          JACAREI - MULTMIX JACAREI<br>
          JALES - ROUPARIA<br>
          JUNDIAI - LOUISIANA II<br>
          LEME - SUNSET<br>
          LIMEIRA - YUZU<br>
          LINS - KINHA MENSUWEAR<br>
          LORENA - CHUVA DE PRATA<br>
          MARILIA - NOVITAT MARILIA 2<br>
          MARILIA - QUADRA 10<br>
          MARILIA - QUADRA 10 FEM<br>
          MARILIA - QUADRA 10 II<br>
          MAUA - PARANOIA MAUA<br>
          MOCOCA - COSTA BRAVA<br>
          MOGI DAS CRUZES - CONCEPT MOGI<br>
          MOGI DAS CRUZES - NADIA CONCEITO<br>
          MOGI DAS CRUZES - NADIA STORE<br>
          OLIMPIA - BLACK WHITE<br>
          OURINHOS - SETE VESTE<br>
          PAULINIA - IRENE MOREIRA<br>
          PEDREIRA - THERESA MODAS<br>
          PINDAMONHANGABA - MAITÊ BOUTIQUE<br>
          PIRACICABA - LOGGIA<br>
          PIRACICABA - SAMEA BOUTIQUE PIRACICABA<br>
          PITANGUEIRAS - NEIVA COLLECTION<br>
          PRESIDENTE PRUDENTE - LELE DA CUCA PRUDENTE<br>
          RIO CLARO - SAMEA BOUTIQUE<br>
          RIO DAS PEDRAS - MAÇA VERDE<br>
          SÃO BERNARDO DO CAMPO - GET IT MODAS<br>
          SÃO BERNARDO DO CAMPO - MASCOLLO &amp; LITCH<br>
          SÃO CAETANO DO SUL - BOURGUEZIA<br>
          SÃO CARLOS - EQUILIBRIO III<br>
          SÃO CARLOS - EQUILIBRIO WAY<br>
          SÃO JOÃO DA BOA VISTA - USKY<br>
          SÃO JOSÉ DO RIO PARDO - TENDÊNCIA LEVIS<br>
          SÃO JOSÉ DO RIO PARDO - VERNISSAGE RIO PARDO<br>
          SÃO JOSÉ DO RIO PRETO - ACQUA IT<br>
          SÃO JOSÉ DO RIO PRETO - REDENTORA<br>
          SÃO JOSÉ DO RIO PRETO - THE ORIGINALS<br>
          SÃO JOSÉ DOS CAMPOS - CONCEPT EXCHANGE<br>
          SÃO JOSÉ DOS CAMPOS - GEOFREEY<br>
          SÃO PAULO - ESTAÇÃO PRINCIPAL<br>
          SÃO PAULO - HOUSE OF SNEAKERS<br>
          SÃO PAULO - KAMAROTE D GRIFE<br>
          SÃO PAULO - KOIN ADMINISTRADORA<br>
          SÃO PAULO - MARRIUSH<br>
          SÃO SEBASTIÃO - BALI EXPRESS<br>
          SANTA BARBARA DOESTE - HIPOTESE MULTIMARCAS<br>
          SANTA CRUZ DO RIO PARDO - METROPOLE<br>
          SANTO ANDRÉ - ALLA SCALLA 2<br>
          SANTO ANDRÉ - MARIA MARIA 2<br>
          SANTOS - IRIANA 2<br>
          SANTOS - YUPPIE<br>
          SANTOS - YUPPIE 3<br>
          SERRA NEGRA - ALWAYS SURF SHOP 1<br>
          SERTÃOZINHO - BALADAH BRASIL<br>
          SOCORRO - ATOL DAS ROCAS<br>
          SUZANO - SCARLEN CALÇADOS<br>
          TAQUARITINGA - CASA MODELO<br>
          TATUÍ - CASA JOÃO<br>
          TAUBATÉ - VITALLI<br>
          TAUBATÉ - MARINA HOT<br>
          TAUBATÉ - MARINA HOT 2<br>
          TUPA - HEDLA<br>
          UBATUBA - AZUL DO MAR III<br>
          VARGEM GRANDE DO SUL - ZERO GRAW</p>
        <p><strong>SANTA CATARINA<br>
          </strong> BALNEARIO CAMBORIU - EPOCA<br>
          BALNEARIO CAMBORIU - VIVE LA VIE NOMADE ALEGRA<br>
          BLUMENAU - MAINA BIS<br>
          BRUSQUE - IBIZA BRUSQUE<br>
          CAÇADOR - VALENTINA<br>
          CHAPECÓ - MOVE!<br>
          ITAJAÍ - VIVE LA VIE<br>
          ITAPEMA - MAISON CL<br>
          JOINVILLE - BLOOD STREAM<br>
          LAGES - MI-CHA<br>
          RIO DO SUL - EVIDENCE LENA MODAS<br>
          TIJUCAS - BIJOUX</p>
        <p><strong>SERGIPE<br>
          </strong> ESTANCIA - HÁBITO<br>
          LAGARTO - LUXUS</p>
        <p><strong>TOCANTINS<br>
          </strong> ARAGUAINA - LOJA MILLENNIUM<br>
          GURUPI - DONNA - GURUPI<br>
          PALMAS - GISELE LEITE - SHOPPING</p>
      </div>
    </div>
    <div style="clear:both;"></div>
  </div>
</div>
</body>
</html>