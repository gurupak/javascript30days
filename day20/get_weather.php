<?php 

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.openweathermap.org/data/2.5/weather?lat=33.6938118&lon=73.0651511&exclude=current&appid=3dae71b9bd582eceec73b0514023dfae&units=metric');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$phoneList = curl_exec($cURLConnection);
curl_close($cURLConnection);

$jsonArrayResponse - json_decode($phoneList);