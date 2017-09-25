<?php

namespace denbora\R_T_G_Services\examples\SOAP\Tournament;

use denbora\R_T_G_Services\casino\Casino;

class GetRestrictedTournaments
{
    /**
     * GetRestrictedTournaments constructor.
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

            $classList = $tournamentService->call('getPlayerClassList', $casinoList);

            $data = array(
                'StartDate' => '2017-08-01',
                'EndDate' => '2017-09-01',
                'casinoList' => $casinoList,
                'playerClass' => $classList
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
