<?php

$curl = curl_init();

$url = $_SERVER['PHP_SELF'];
$urls = explode('/', $url);
$param = (strpos(end($urls), '.php') === true) ? '' : end($urls);

curl_setopt_array($curl, array(
	CURLOPT_URL => 'api.coincap.io/v2/assets/' . $param,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
