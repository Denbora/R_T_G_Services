<?php

namespace denbora\R_T_G_Services\examples\SOAP\Jackpot;

use denbora\R_T_G_Services\casino\Casino;

class GetProgressiveJackpot
{
    /**
     * GetProgressiveJackpot constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $jackpotService = $casino->getService($service);
            $inputs = array(
                'GameID' => 214,
                'MachineID' => 14,
                'ForReal' => true
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
