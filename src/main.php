<?php
require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', 'tOBmG40yY5FbYcWc7Ui1sEWlV');
define('CONSUMER_SECRET', 'teLgbnLeUGqCwqnrBFOTjiOCihc8WMIuIPJuI86gG98vABmkgZ
');
$access_token = '189030590-kHf6U3mbrVAw3Kmwe9ruHT2Bxp1hVP8dmMd5GRC8';
$access_token_secret = 'iH0BiPXIHQ8MLDBzRBSN0eCrbDbruzntAz56IjrVgzPC9';

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);

$content = $connection->get("account/verify_credentials");
var_dump($content);
