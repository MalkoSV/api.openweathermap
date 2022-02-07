<?php

$url = 'http://api.openweathermap.org/data/2.5/weather';

$options = array(
    'id' => 700568,
    'APPID' => 'b7baa67d8544edb9f9160b7300a709be',
    'units' => 'metric',
    'lang' => 'en'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

$response = curl_exec($ch);
$outputData = json_decode($response, 1);
curl_close($ch);

echo '<pre>';

print_r($outputData);
