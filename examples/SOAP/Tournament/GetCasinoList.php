<?php

namespace denbora\R_T_G_Services\examples\SOAP\Tournament;

use denbora\R_T_G_Services\casino\Casino;

class GetCasinoList
{
    /**
     * GetCasinoList constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $tournamentService = $casino->getService($service);
            $inputs = '';

            $result = $tournamentService->call($method, $inputs);

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
