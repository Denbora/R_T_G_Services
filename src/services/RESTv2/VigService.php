<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class VigService extends RestV3Service
{
    const SERVICE_NAME = 'Vig';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function handleMessagePOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'HandleMessage', $queryJSON);
    }
}
