<?php

use denbora\R_T_G_Services\casino\Casino;
use denbora\R_T_G_Services\casino\CasinoRest;
use denbora\R_T_G_Services\examples\Create;
use denbora\R_T_G_Services\examples\Loader;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../experiments/config.php';

$casino = new Casino($base_url_EU, $certificateEU, $rtgPasswordEU);

//$casinoRest = new CasinoRest($restBaseUrlEU, $certificateEU, $rtgKeyEU, $rtgPasswordEU);
$method = 'redeemCoupon';
$service = 'Cashier';
//$method = 'putEmailVerificationStatus';
//$service = 'Player';

try {
    //$casino->testAllMethods();
    Loader::call($service, $method, $casino);
    //Loader::rest($service, $method, $casinoRest);
    /*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        Create::savePlayer($_POST, $casino);
    } else {
        Create::printForm();
    }*/
} catch (\Exception $e) {
    echo "<pre>";
    var_dump($e);
    echo "</pre>";
}
