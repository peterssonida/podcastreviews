<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.spreaker.com/v2/users/11282816",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Host: api.spreaker.com",
    "Postman-Token: eebed3ba-35b1-420a-8706-598a20d6b862,f516b337-6244-4540-99e6-33a5a05aa2d3",
    "User-Agent: PostmanRuntime/7.13.0",
    "accept-encoding: gzip, deflate",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
$info = json_decode($response);

$fullname = $info->response->user->fullname;
$image_url = $info->response->user->image_url;
$facebook = $info->response->user->facebook_permalink;
$twitter = $info->response->user->twitter_username;


curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {

}

?>
