<?php

require '../vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

$handle = curl_init('https://flordemol-mp-commerce-php.herokuapp.com/notificaciones.php');

$data = [
    'key' => 'value'
];

$encodedData = json_encode($data);

curl_setopt($handle, CURLOPT_POST, 1);
curl_setopt($handle, CURLOPT_POSTFIELDS, $encodedData);
curl_setopt($handle, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

$result = curl_exec($handle);

?>
