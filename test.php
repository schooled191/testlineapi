<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.line.me/v2/bot/message/6846920349541/content",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer OiFfXS/z6c3apamAsO/5EHnQtIbsw104XLcrFtUV+/wwF/3nd7h49zb/MzmR9QVoenYVUbi7ClKuXf/dFK7juWapND6faujmbYJL79hE1n3iJ6h8yWuHNhh3WeoHCe/ou5VnZL2DrK/e8N/M6UkMaAdB04t89/1O/w1cDnyilFU=",
    "cache-control: no-cache",
    "postman-token: 08ccac48-967d-8f8f-a642-661ce6de8761"
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
