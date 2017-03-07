<?php

$url = 'https://www.baidu.com';


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 2);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_CAINFO, __DIR__ . '/cacert.pem');

$res = curl_exec($ch);
$res1 = curl_getinfo($ch);
$res2 = curl_error($ch);

print_r($res1);
echo "\n";
echo $res2;
echo $res;











?>