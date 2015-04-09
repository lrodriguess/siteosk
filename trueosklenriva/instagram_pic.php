<?php include '../analytics.php' ?>
<?php
require 'includes/functions.php';
$Token = '40380176.8d3a2ac.2c59866f0712460bb74dda599e5026da';

$Id = isset($_POST['id']) ? trim($_POST['id']) : '';

$result = fetchData("https://api.instagram.com/v1/media/".$Id."?access_token=".$Token);
$result = json_decode($result,true);

$post = $result['data'];

$autorPost = $post['user']['full_name'];
$autorUser = $post['user']['username'];
$urlFoto = $post['images']['standard_resolution']['url'];
$urlInsta = $post['link'];
$numLikes = $post['likes']['count'];
$numComments = $post['comments']['count'];
$Descri = $post['caption']['text'];
$idPic = $post['id'];
$urlThumb = $post['images']['thumbnail']['url'];
?>
<div id="insta-foto"><img src="<?php echo $urlFoto; ?>" width="440" height="440" /></div>
<div id="insta-text">
  <h5><?php echo $autorUser; ?></h5>
  <p><?php echo $Descri; ?></p>
  <div id="insta-link">
    <ul>
      <li class="like"><?php echo $numLikes; ?></li>
      <li class="comm"><?php echo $numComments; ?></li>
    </ul>
  </div>
  <button onClick="abrirInstaUrl('<?php echo $urlInsta; ?>');"><span>&nbsp;</span>VER NO INSTAGRAM</button>
</div>
