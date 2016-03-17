<?php

$cors_headers = array(
    'Access-Control-Allow-Origin: *',
    'Access-Control-Allow-Methods: POST, GET, OPTIONS',
);
foreach ($cors_headers as $cors_header) {
    header($cors_header);
}

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => $_GET['get'],
));
curl_exec($curl);
