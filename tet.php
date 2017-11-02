<?php
$access_token = 'SgiYZ+fmWm9HqBxd6hNsrriKd904jxEVMJPkTNko+OUtlHrbDA46VudxavC1+67zK8qLt7MjhSZk7AWRG1yFclMo6iCEf8z5GFS8Ik28xmQ7uSazAC2YyBov7La2Sv9dfOZiSdZ1t2DBZAO0JLEsnwdB04t89/1O/w1cDnyilFU=';

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
