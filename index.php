<?php

$uuid = random_bytes(16);
$array = [
    'partner_uuid' => $uuid,
];
echo $uuid . PHP_EOL;
$ca =  json_encode($uuid);
var_dump($ca);
echo json_last_error_msg();

