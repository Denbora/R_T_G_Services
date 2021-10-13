<?php

namespace denbora\R_T_G_Services\services\RESTv3;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class EmailNotificationService extends RestV3Service
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
