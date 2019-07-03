<?php

use denbora\R_T_G_Services\casino\Casino;
use denbora\R_T_G_Services\casino\CasinoRest;
use denbora\R_T_G_Services\examples\Create;
use denbora\R_T_G_Services\examples\Loader;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../experiments/config.php';

//$casino = new Casino($base_url_US, $certificateUS, $rtgPasswordUS);

$casinoRest = new \denbora\R_T_G_Services\casino\CasinoRest($restBaseUrlUS, $certificateUS, $rtgKeyUS, $rtgPasswordUS);
$casinoRestV2 = new \denbora\R_T_G_Services\casino\CasinoRestV2($restBaseUrlUS, $certificateUS, $rtgKeyUS, $rtgPasswordUS);
$method = 'getPlayerAccountBalance';
$service = 'Player';

try {
//    $test = $casinoRest->player->getClasses();
    $test = $casinoRestV2->PlayerService->getPlayerClassesGET();
} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "</pre>";
}
