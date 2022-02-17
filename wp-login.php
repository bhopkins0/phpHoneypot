<?php
$ip = $_SERVER["REMOTE_ADDR"];
$location = "/wp-login.php";
$useragent = $_SERVER["HTTP_USER_AGENT"];
$date = date(DATE_RFC2822);

if (strlen($useragent) > 50) {
$useragent = substr($useragent, 0, 50);
}
$file = fopen("list.txt", "a");
$txt = $date ." | " .$location ." | ". $ip. " | ". $useragent. "\n";
fwrite($file,$txt);
fclose($file);
?>
