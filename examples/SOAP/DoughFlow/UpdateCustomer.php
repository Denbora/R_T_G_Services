<?php

namespace denbora\R_T_G_Services\examples\SOAP\DoughFlow;

use denbora\R_T_G_Services\casino\Casino;

class UpdateCustomer
{
    /**
     * UpdateCustomer constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, Casino $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $inputs = array(
                'Login' => 'porter4454',
                'Gender' => 'MALE',
                'Fname' => 'fasdfasdf',
                'Lname' => 'fasdfadf',
                'Email' => 'fsdhfgahsdgf@fjhasjdf.fasdf',
                'Dayphone' => '4545875',
                'Evephone' => '9565652',
                'Cellphone' => '9121451',
                'smsMessages' => 'NO',
                'Addr1' => 'sdvasdfa',
                'Addr2' => 'asgdasdg',
                'City' => 'gasdgasd',
                'State' => 'gasdga',
                'Zip' => '545212',
                'Country' => 'US',
                'birthdate' => '07/23/1992',
                'Caller' => 'CASINO'
            );

            $result = $playerService->call($method, $inputs);

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
