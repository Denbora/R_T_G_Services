<?php

namespace denbora\R_T_G_Services\examples\SOAP\Tournament;

use denbora\R_T_G_Services\casino\Casino;

class GetUnRestrictedTournaments
{
    /**
     * GetUnRestrictedTournaments constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $tournamentService = $casino->getService($service);
            $inputs = '';

            $casinoList = $tournamentService->call('getCasinoList', $inputs);

            $data = array(
                'StartDate' => '2017-08-01',
                'EndDate' => '2017-08-01',
                'casinoList' => $casinoList
            );

            $result = $tournamentService->call($method, $data);

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
