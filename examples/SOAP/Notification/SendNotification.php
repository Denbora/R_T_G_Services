<?php

namespace denbora\R_T_G_Services\examples\SOAP\Notification;

use denbora\R_T_G_Services\casino\Casino;

class SendNotification
{
    /**
     * SendNotification constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $jackpotService = $casino->getService($service);
            $inputs = array(
                'MailItemList' => array(
                    'From' => 'test1@gmail.com',
                    'To' => 'test@gmail.com'
                )
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
