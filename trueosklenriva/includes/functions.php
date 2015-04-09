<?php include 'http://osklen.com/analytics.php' ?>
<?php
function fetchData($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 20);
  $result = curl_exec($ch);
  curl_close($ch); 
  return $result;
}
function getInstaID($username, $token) {
	$username = strtolower($username);
	$url = "https://api.instagram.com/v1/users/search?q=".$username."&access_token=".$token;
	$get = file_get_contents($url);
	$json = json_decode($get);
	
	foreach($json->data as $user) 	{
		if($user->username == $username) {
			return $user->id;
		}
	}
	return '00000000'; // return this if nothing is found
}
?>