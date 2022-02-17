<?php
$reason = "CVE-2020-28036";
$ip = $_SERVER["REMOTE_ADDR"];
$location = "/wp-includes/class-wp-xmlrpc-server.php";
$useragent = $_SERVER["HTTP_USER_AGENT"];
$date = date(DATE_RFC2822);

if (strlen($useragent) > 50) {
$useragent = substr($useragent, 0, 50);
}
$file = fopen("../list.txt", "a");
$txt = $date ." | " .$location ." | ". $ip. " | ". $useragent. " | ". $reason ."\n";
fwrite($file,$txt);
fclose($file);
?>
