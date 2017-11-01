<?php
$access_token = 'otX5DX2jMh4zkU64D7MKA3xrSi5rkdTR++gAIioFvpT4d5XlvGl9iV9AuETI4sgbJZqxNbEAu/lXmhoA+z8mfYbseHRRSx/Y6iLK8xYPe4AfpZegWUFKIFQ55mxqWOiLJtR5fdZyzomqnWqBzJEGOQdB04t89/1O/w1cDnyilFU=';

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
