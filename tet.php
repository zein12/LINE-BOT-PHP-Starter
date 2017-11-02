<?php
$access_token = 'A9JXENvNmboY5aRvviYz6ml779WP1JW0l8NrUD1kAJRbwAoMN/G5VYnzMyWJN9b87nboZNfYswmvHy/LaP0CPelTbLbOZfO8ddnDw+VrCImbwstbKR/J+X7Ovt/7sTGPgtaSyxzodyZPJ6xGzbiKzAdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);>']);
$response = $bot->getMessageContent('<1497601714>');
if ($response->isSucceeded()) {
    $tempfile = tmpfile();
    fwrite($tempfile, $response->getRawBody());
} else {
    error_log($response->getHTTPStatus() . ' ' . $response->getRawBody());
}
echo "OK";
