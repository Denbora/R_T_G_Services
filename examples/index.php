<?php

use denbora\R_T_G_Services\casino\Casino;
use denbora\R_T_G_Services\examples\Loader;
use denbora\R_T_G_Services\R_T_G_ServiceException;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../experiments/config.php';

$casino = new Casino($base_url, $certificate, $rtgPassword);

$method = 'getPlayer';
$service = 'Player';

try {
    Loader::call($service, $method, $casino);
} catch (\Exception $e) {
    throw new R_T_G_ServiceException('index error - ' . $e->getMessage());
}