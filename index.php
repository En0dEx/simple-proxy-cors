<?php
// Cors
$cors_headers = array(
    'Access-Control-Allow-Origin: *',
    'Access-Control-Allow-Methods: POST, GET, OPTIONS',
);
foreach ($cors_headers as $cors_header) {
    header($cors_header);
}

// Curl
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $_GET['get'],
    CURLOPT_HEADER => true
));
$response = curl_exec($curl);
list($header, $body) = explode("\r\n\r\n", $response, 2);

$requestContentType = curl_getinfo($curl, CURLINFO_CONTENT_TYPE);
$contentType = "Content-Type: " . $requestContentType;

header($contentType);

curl_close($curl);

echo $body;
