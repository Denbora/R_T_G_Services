<?php

namespace denbora\R_T_G_Services\examples\SOAP\Lobby;

use denbora\R_T_G_Services\casino\Casino;

class GetSessionHash
{
    /**
     * GetSessionHash constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $lobbyService = $casino->getService($service);
            $inputs = array(
                'playerId' => '10021965'
            );

            $result = $lobbyService->call($method, $inputs);

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
