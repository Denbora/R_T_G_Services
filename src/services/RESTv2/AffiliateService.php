<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class AffiliateService extends RestV3Service
{
    const SERVICE_NAME = 'Affiliate';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function listAffiliatesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ListAffiliates', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function createAffiliatePOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CreateAffiliate', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getGlobalLinkedGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetGlobalLinked', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAccountLedgerAllGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAccountLedgerAll', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getDownloadInformationAllGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetDownloadInformationAll', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getBannedDeactivatedPlayersAllGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetBannedDeactivatedPlayersAll', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getUnbannedPlayersGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetUnbannedPlayers', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayersSessionsHistoryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayersSessionsHistory', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getNewPlayerSignUpsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetNewPlayerSignUps', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayersSummaryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayersSummary', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getDownloadsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetDownloads', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function linkGlobalAffiliatePOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'LinkGlobalAffiliate', $queryJSON);
    }
}
