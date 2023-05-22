<?php

require_once 'vendor/autoload.php';

use CryptorgApi\CryptorgApiAccess;
use CryptorgApi\CryptorgApiBotsFutures;
use CryptorgApi\CryptorgApiPair;

//$config = parse_ini_file("config_local.ini");
$config = parse_ini_file("config.ini");

$apiAccess = new CryptorgApiAccess($config['apiKey'], $config['apiSecret']);
$apiFutures = new CryptorgApiBotsFutures($config['apiKey'], $config['apiSecret']);
$apiPair = new CryptorgApiPair($config['apiKey'], $config['apiSecret']);

header("Content-Type: application/json");
