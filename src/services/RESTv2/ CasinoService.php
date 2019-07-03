<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class CasinoService extends RestV2Service implements RestServiceInterface
{
    const SERVICE_NAME = 'Casino';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getSkinsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetSkins', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getClientChannelsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetClientChannels', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCasinoTotalsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCasinoTotals', $queryJSON);
    }
}
