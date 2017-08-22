<?php

namespace denbora\R_T_G_Services\examples\Player;

use denbora\R_T_G_Services\casino\Casino;

class BanPlayer
{
    /**
     * GetPlayer constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service, true);
            $ban = array(
                'PID' => '10024291',
                'Comment' => 'test',
                'BanType' => 1
            );

            $result = $playerService->call($method, $ban);
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
