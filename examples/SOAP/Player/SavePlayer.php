<?php

namespace denbora\R_T_G_Services\examples\SOAP\Player;

use denbora\R_T_G_Services\casino\Casino;

class SavePlayer
{
    /**
     * SavePlayer constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, Casino $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $createData = array(
                'Player' => array(
                    'Login' => 'porter-8855',
                    'Password' => 'porter_8855',
                    'Contact' => array(
                        'CountryID' => 'EG',
                        'EMail' => 'test1559@tste.test'
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
             * id for porter-8855 - 10025624
             * id ofr porter-44124 -
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
