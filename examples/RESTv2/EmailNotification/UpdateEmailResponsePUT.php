<?php

namespace denbora\R_T_G_Services\examples\RESTv2\EmailNotification;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class UpdateEmailResponsePUT extends RestExample
{
    /**
     * UpdateEmailResponsePUT constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'name_from' => 'string',
                'email_from' => 'string',
                'bcc_email_address' => 'string',
                'subject' => 'string',
                'message' => 'string',
                'email_as_html' => true,
                'skin_id' => 0,
                'notification_type' => 0,
                'notification_url' => 'string',
                'affects_other_skins_of_same_language' => true,
            ];

            $result = $casino->EmailNotificationService->updateEmailResponsePUT(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
