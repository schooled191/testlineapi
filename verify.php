<?php
$access_token = '3fqNoDxOTgjhRbMSekT8Z98ylLrR3scnw3AqtUCzk2uIIwL6RnE93VZEyyUB+XuldePM+OqbZOxltnCGxgiAOc54/ckuYvKmR5gemIn7UChCoRFG0AOJg14SzdPxhaYJErJbivTQ3JaHKX7zHidyMAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
