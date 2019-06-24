<?php

namespace denbora\R_T_G_Services\examples\SOAP\Tournament;

use denbora\R_T_G_Services\casino\Casino;

class GetPlayerClassList
{
    /**
     * GetPlayerClassList constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, Casino $casino)
    {
        try {
            $tournamentService = $casino->getService($service);
            $inputs = '';

            $casinoList = $tournamentService->call('getCasinoList', $inputs);

            $result = $tournamentService->call($method, $casinoList);

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
