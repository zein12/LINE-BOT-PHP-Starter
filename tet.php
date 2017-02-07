<?php

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<3/cEBpOR0mjAMUtnHKrSrx3N6FnMVNPYfXBIwMO6HNGaljxuxTxZz2fGrmZYFwqfV3dvAWMa7FEGrmOONfbZ7or1wxYgpjbtFMS0Mkk+RftjvYSrUpThxAHGiivf2M662z2zM5P8BSKby0dJiBG3GQdB04t89/1O/w1cDnyilFU=>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '< a6b4b1a80d9f25eb0a719fc92cef7d86 >']);
$response = $bot->getMessageContent('<messageId>');
if ($response->isSucceeded()) {
    $tempfile = tmpfile();
    fwrite($tempfile, $response->getRawBody());
} else {
    error_log($response->getHTTPStatus() . ' ' . $response->getRawBody());
}
echo "OK";
