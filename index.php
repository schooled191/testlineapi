<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.line.me/v2/bot/profile/Uf3f262a1d80ca2eb6e2ebed55d347c64",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{\n\t\"type\":\"postback\",\n\t\"ryplyToken\":\"nHuyWiB7yP5Zw52FIkcQobQuGDXCTA\",\n\t\"postback\":[\n\t\t{\n\t\t\t\"data\":\"งดงาม\"\n\t\t}\n\t]\n}\n",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer 3fqNoDxOTgjhRbMSekT8Z98ylLrR3scnw3AqtUCzk2uIIwL6RnE93VZEyyUB+XuldePM+OqbZOxltnCGxgiAOc54/ckuYvKmR5gemIn7UChCoRFG0AOJg14SzdPxhaYJErJbivTQ3JaHKX7zHidyMAdB04t89/1O/w1cDnyilFU=",
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: db206272-94cf-8319-def9-f6547bb77c46"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
