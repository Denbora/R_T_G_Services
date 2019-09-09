<?php

use denbora\R_T_G_Services\casino\Casino;
use denbora\R_T_G_Services\casino\CasinoRest;
use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2;

include __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/../experiments/config.php';

$casino = new Casino($soapBaseUrl, $certificate, $password);
$casinoRest = new CasinoRest($restBaseUrl, $certificate, $key, $password);
$casinoRestV2 = new CasinoRestV2($restBaseUrl, $certificate, $key, $password);

//$example = new RESTv2\Player\GetPlayerClassesGET($casinoRestV2);

try {
//    new \denbora\R_T_G_Services\examples\REST\Player\GetPlayer($casinoRest);
    new \denbora\R_T_G_Services\examples\SOAP\Player\GetPlayer($casino, 'Player', 'GetPlayer');
} catch (\Exception $e) {
    echo "<pre>";
    var_dump($e);
    echo "</pre>";
}
