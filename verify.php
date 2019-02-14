<?php
$access_token = '5T3hlxPcZBIsk7UuW669iuYSZQJW7w8xFMuHbWlznY1HTz0vz7rHa6zZX/ddTXhBudqW5dUkuk7N7n/0rrcOgVadp7Xs8Ss1ZR8GeweTCgKVSdzoR6Gl3Afgp3AcFTsfLqjOVl/zy/Hv8vyD3IWBrgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>