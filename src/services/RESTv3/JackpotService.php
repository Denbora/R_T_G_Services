<?php

namespace denbora\R_T_G_Services\services\RESTv3;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class JackpotService extends RestV3Service
{
    const SERVICE_NAME = 'Jackpot';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated Use {@see \denbora\R_T_G_Services\services\RESTv2\JackpotService::getLobbyGetProgressiveJackpotV2GET()}
     */
    public function getLobbyGetProgressiveJackpotGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetLobbyGetProgressiveJackpot', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getProgressiveJackpotsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetProgressiveJackpots', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getTopLocalAuslotJackpotsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetTopLocalAuslotJackpots', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getJackpotWinnersGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetJackpotWinners', $queryJSON);
    }
}
