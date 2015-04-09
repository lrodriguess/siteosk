<?php
require 'includes/functions.php';

$Token = '40380176.8d3a2ac.2c59866f0712460bb74dda599e5026da';
$UserName = 'barthy2001';
$tagBusca = 'trueosklenriva';
$tagUser = 'osklen';

$userId = getInstaID($UserName, $Token);
//$result = fetchData("https://api.instagram.com/v1/tags/".$tagBusca."/media/recent?access_token=".$Token."&count=50");
$result = fetchData("https://api.instagram.com/v1/users/".$tagUser."/media/recent?access_token=".$Token."&count=50");
$result = json_decode($result,true);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
BODY{
	font-family:Arial, Helvetica, sans-serif;
	size:12px;
	color:#333;
}
</style>
</head>

<body>

<?php include '../analytics.php' ?>

<table width="700" border="0" cellspacing="0" cellpadding="3">
<?php foreach ($result['data'] as $post) { ?>
  <tr>
    <td width="176" style="border:1px solid #CCC;"><a href="<?php echo $post['link']; ?>" target="_blank"><img src="<?php echo $post['images']['thumbnail']['url']; ?>" /></a></td>
    <td width="506" style="border:1px solid #CCC;"><h2><strong>ID: </strong><?php echo $post['id']; ?></h2>
      <p><strong>URL: </strong><?php echo $post['images']['thumbnail']['url']; ?></p></td>
  </tr>
<?php } ?>
</table>
</body>
</html>