<?php 
$access_token = 'SgiYZ+fmWm9HqBxd6hNsrriKd904jxEVMJPkTNko+OUtlHrbDA46VudxavC1+67zK8qLt7MjhSZk7AWRG1yFclMo6iCEf8z5GFS8Ik28xmQ7uSazAC2YyBov7La2Sv9dfOZiSdZ1t2DBZAO0JLEsnwdB04t89/1O/w1cDnyilFU='; 
$url = 'https://api.line.me/v1/oauth/verify'; 
$headers = array('Authorization: Bearer ' . $access_token); 
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
$result = curl_exec($ch); 
curl_close($ch);
echo $result;
