<?php 
$access_token = 'A9JXENvNmboY5aRvviYz6ml779WP1JW0l8NrUD1kAJRbwAoMN/G5VYnzMyWJN9b87nboZNfYswmvHy/LaP0CPelTbLbOZfO8ddnDw+VrCImbwstbKR/J+X7Ovt/7sTGPgtaSyxzodyZPJ6xGzbiKzAdB04t89/1O/w1cDnyilFU=
'; 
$url = 'https://api.line.me/v1/oauth/verify'; 
$headers = array('Authorization: Bearer ' . $access_token); 
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
$result = curl_exec($ch); 
curl_close($ch);
echo $result;
