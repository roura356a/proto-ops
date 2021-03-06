<?php

session_start();

require_once 'Auth/Yubico.php';
$config  = require_once 'config.php';
$yubikey = new Auth_Yubico($config['clientId'], $config['clientKey']);
$key     = $_POST['key'];

if ($key) {
    $verify = verifyYubikey($key, $config['data']['keys'], $yubikey);
    $now    = date('U');

    $_SESSION['expiry'] = $verify === true ? ($now + $config['sessionLenght']) : $now;
}

$auth = $_SESSION['expiry'] > date('U');

/**
 * This basic function just validates the OTP against Yubico's API
 * using the API key stored in `config.php`.
 *
 * @param String $key
 * @param array $auth_keys
 * @param Auth_Yubico $yubikey
 * @return bool|null
 */
function verifyYubikey(String $key, Array $auth_keys, Auth_Yubico $yubikey)
{
    $otp  = $yubikey->parsePasswordOTP(htmlspecialchars($key))['otp'];
    $auth = $yubikey->verify($otp);

    if (!in_array(substr($key, 0, 12), $auth_keys)) {
        return null;
    }

    return gettype($auth) !== 'object';
}
