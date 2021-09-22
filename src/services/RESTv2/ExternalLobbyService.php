<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class ExternalLobbyService extends RestV3Service
{
    const SERVICE_NAME = 'ExternalLobby';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated use {@see ExternalLobbyService::getGET()}
     */
    public function getExternalLobbiesGET($queryJSON = '{}')
    {
        return $this->getGET($queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated see {@see ExternalLobbyService::getExternalLobbyUrlGET()}
     */
    public function getExternalLobbyPOST($queryJSON = '{}')
    {
        return $this->getExternalLobbyUrlGET($queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @note Not tested.
     */
    public function getGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'Get', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @note Earlie was POST method
     */
    public function getExternalLobbyUrlGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetExternalLobbyUrl', $queryJSON);
    }
}
