<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class CasinoService extends RestV2Service
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
    public function listIdTypesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ListIdTypes', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function modifyTypeInformationPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ModifyTypeInformation', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function addTypeInformationPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'AddTypeInformation', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function deleteTypeInformationDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'DeleteTypeInformation', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function listIdInformationGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ListIdInformation', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function modifyIdInformationPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ModifyIdInformation', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function addIdInformationPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'AddIdInformation', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function deleteIdInformationDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'DeleteIdInformation', $queryJSON);
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

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function pendingGamesDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'PendingGames', $queryJSON);
    }
}
