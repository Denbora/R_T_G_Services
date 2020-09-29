<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class ExternalLobbyService extends RestV2Service
{
    const SERVICE_NAME = 'ExternalLobby';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getExternalLobbiesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetExternalLobbies', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getExternalLobbyPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetExternalLobby', $queryJSON);
    }
}
