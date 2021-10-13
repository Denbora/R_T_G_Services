<?php

namespace denbora\R_T_G_Services\services\RESTv3;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class ExternalLobbyService extends RestV3Service
{
    const SERVICE_NAME = 'ExternalLobby';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'Get', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getExternalLobbyUrlGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetExternalLobbyUrl', $queryJSON);
    }
}
