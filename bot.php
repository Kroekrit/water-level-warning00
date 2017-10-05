<?php
$access_token = 'lBv6z6oARlBcmemu4NTgjw30f/6ybDFU/GFnvK13noz+NlskSIpQbWn8rRdu99MZpAgW7ycdBM541hw9izcVeqRcD2b6h592EZ9tLbR9nD9yF+REWJTW18VCHbmyNE9cJnVcSj5cpPLo2mevFLyZjAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;