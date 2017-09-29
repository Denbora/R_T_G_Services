<?php

namespace denbora\R_T_G_Services\examples\SOAP\Game;

use denbora\R_T_G_Services\casino\Casino;

class GetFlashGameList
{
    /**
     * GetFlashGameList constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $gameService = $casino->getService($service);
            $inputs = array(
                'Type' => 0,
                'SkinId' => 1
            );

            $result = $gameService->call($method, $inputs);

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
