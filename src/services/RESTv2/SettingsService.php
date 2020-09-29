<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class SettingsService extends RestV2Service
{
    const SERVICE_NAME = 'Settings';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getFlashConfigurationGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetFlashConfiguration', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAccountFieldsLoginGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAccountFieldsLogin', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAccountFieldsCreationGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAccountFieldsCreation', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerRestrictionsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerRestrictions', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getUnsupportedBrowserGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetUnsupportedBrowser', $queryJSON);
    }
}
