<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class MessageService extends RestV2Service
{
    const SERVICE_NAME = 'Message';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getMessageGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetMessage', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function updateMessagePUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'UpdateMessage', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function createMessagePOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CreateMessage', $queryJSON);
    }
}
