<?php

namespace denbora\R_T_G_Services\examples\SOAP\DataCollect;

use denbora\R_T_G_Services\casino\Casino;

class GetPlayer21GamesHistory
{
    /**
     * GetPlayer21GamesHistory constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $dataCollection = $casino->getService($service);
            $inputs = array(
                'ai_casino_id' => 1,
                'as_player_login' => 'porter-007',
                'ai_mach_id' => 65656,
                'ad_start_date' => '2017-08-01',
                'ad_end_date' => '2017-08-03',
                'ai_num_games' => 1,
                'ab_show_images' => false
            );

            $result = $dataCollection->call($method, $inputs);

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
