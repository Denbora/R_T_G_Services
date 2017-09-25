<?php

namespace denbora\R_T_G_Services\examples\SOAP\GameHistory;

use denbora\R_T_G_Services\casino\Casino;

class GetRSVSGameDetailsHistoryWithIcons
{
    /**
     * GetRSVSGameDetailsHistoryWithIcons constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $gameHistoryService = $casino->getService($service);
            $inputs = array(
                'gamenum' => 5689
            );

            $result = $gameHistoryService->call($method, $inputs);

            echo "<pre>";
            var_dump($result);
            echo "</pre>";

        } catch (\Exception $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
        }
    }
}
