<?php

/**
 * To get an API key, go to https://upgrade.yubico.com/getapikey/
 */

$data = json_decode(file_get_contents('data.json'), true);

return [
    'clientId' => 'CLIENT_ID',
    'clientKey' => 'CLIENT_KEY',
    'sessionLenght'=> 30,
    'data' => $data
];
