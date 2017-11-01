<?php 
$access_token = 'otX5DX2jMh4zkU64D7MKA3xrSi5rkdTR++gAIioFvpT4d5XlvGl9iV9AuETI4sgbJZqxNbEAu/lXmhoA+z8mfYbseHRRSx/Y6iLK8xYPe4AfpZegWUFKIFQ55mxqWOiLJtR5fdZyzomqnWqBzJEGOQdB04t89/1O/w1cDnyilFU='; 
$url = 'https://api.line.me/v1/oauth/verify'; 
$headers = array('Authorization: Bearer ' . $access_token); 
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
$result = curl_exec($ch); 
curl_close($ch);
echo $result;
