<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class EmailNotificationService extends RestV2Service implements RestServiceInterface
{
    const SERVICE_NAME = 'EmailNotification';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getEmailNotificationsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetEmailNotifications', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function updateEmailResponsePUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'UpdateEmailResponse', $queryJSON);
    }
}
