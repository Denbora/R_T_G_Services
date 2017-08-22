<?php

namespace denbora\R_T_G_Services\examples\Player;

use denbora\R_T_G_Services\casino\Casino;

class SavePlayer
{
    /**
     * SavePlayer constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $createData = array(
                'Player' => array(
                    'Login' => 'porter-981',
                    'Password' => 'porter_981',
                    'Contact' => array(
                        'CountryID' => 'EG',
                        'EMail' => 'ad12fa4test21@gmail.com'
                    )
                ),
                'ThirdPartyDataSync' => false,
                'UserID' => 0,
                'MapToAffID' => false,
                'CalledFromCasino' => false
            );

            /*
             * id for porter-698 - 10024193
             * id for porter-981 - 10024291
             *
             * */

            $result = $playerService->call($method, $createData);

            echo "<pre>";
            var_dump($result);
            echo "<pre>";
        } catch (\Exception $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
        }
    }
}
