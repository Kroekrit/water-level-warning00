<?php
$access_token = '6mZKdSkIlI7itUvxgL0AkWQAZw24CMRkNTvG68gX7+D44u08E/XOBbQAUdEGdXpLpAgW7ycdBM541hw9izcVeqRcD2b6h592EZ9tLbR9nD/eSURLt/He2V38w9BUwaDF966IrCfuT08qwA8fbe1rlAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;