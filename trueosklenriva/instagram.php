<?php include '../analytics.php' ?>

<?php
require 'instagram_array.php';
foreach ($instagram as $post) {
	echo '<div id="insta-thumb" class="insta-link" id_thumb="'.$post['idPic'].'"><img src="'.$post['urlPic'].'" width="103" height="103" /></div>';
}
?>
