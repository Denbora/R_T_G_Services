<?php

namespace denbora\R_T_G_Services\examples\SOAP\Jackpot;

use denbora\R_T_G_Services\casino\Casino;

class GetLastJackpotWinnersBySkin
{
    /**
     * GetLastJackpotWinnersBySkin constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $jackpotService = $casino->getService($service);
            $inputs = array(
                'amountOfPlayers' => 20,
                'skinId' => 1
            );

            $result = $jackpotService->call($method, $inputs);

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
