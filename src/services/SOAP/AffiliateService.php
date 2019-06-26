<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class AffiliateService extends ServiceBase implements ServiceInterface
{
    /**
     * @return array
     */
    public function getClassMethods()
    {
        return $this->classMethods;
    }

    /**
     * @param string $globalID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function listGlobalLinked(string $globalID, bool $rawResponse)
    {
        return $this->run(array('GlobalID' => $globalID), $rawResponse, 'listGlobalLinked', 'ListGlobalLinked');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function createAffiliate($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'createAffiliate', 'CreateAffiliate');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function createProgram($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'createProgram', 'CreateProgram');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getAccountLedger($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getAccountLedger', 'GetAccountLedger');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getAccountLedgerAll($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getAccountLedgerAll', 'GetAccountLedgerAll');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getBannedDeactivatedPlayers($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getBannedDeactivatedPlayers', 'GetBannedDeactivatedPlayers');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getBannedDeactivatedPlayersALL($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getBannedDeactivatedPlayersALL', 'GetBannedDeactivatedPlayersALL');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getDownloadInformation($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getDownloadInformation', 'GetDownloadInformation');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getDownloadInformationAll($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getDownloadInformationAll', 'GetDownloadInformationAll');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getDownloadInformationByDateRange($data, bool $rawResponse)
    {
        return $this->run(
            $data,
            $rawResponse,
            'getDownloadInformationByDateRange',
            'GetDownloadInformationByDateRange'
        );
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getGlobalAffiliateStatsByLocalAID($data, bool $rawResponse)
    {
        return $this->run(
            $data,
            $rawResponse,
            'getGlobalAffiliateStatsByLocalAID',
            'GetGlobalAffiliateStatsByLocalAID'
        );
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getNewPlayerSignups($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getNewPlayerSignups', 'GetNewPlayerSignups');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getNewPlayerSignupsByAID($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getNewPlayerSignupsByAID', 'GetNewPlayerSignupsByAID');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerSummary($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerSummary', 'GetPlayerSummary');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerSummaryALL($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerSummaryALL', 'GetPlayerSummaryALL');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerSummaryByAIDRange($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerSummaryByAIDRange', 'GetPlayerSummaryByAIDRange');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayersCount($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayersCount', 'GetPlayersCount');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getStatsSummary($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getStatsSummary', 'GetStatsSummary');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getStatsSummaryByAID($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getStatsSummaryByAID', 'GetStatsSummaryByAID');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getDownloadTrackingIDsByAID($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getDownloadTrackingIDsByAID', 'GetDownloadTrackingIDsByAID');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getDownloadTrackingIDsByDateRange($data, bool $rawResponse)
    {
        return $this->run(
            $data,
            $rawResponse,
            'getDownloadTrackingIDsByDateRange',
            'GetDownloadTrackingIDsByDateRange'
        );
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getUnBannedPlayers($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getUnBannedPlayers', 'GetUnBannedPlayers');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function globalLink($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'globalLink', 'GlobalLink');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function listAffiliates($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'listAffiliates', 'ListAffiliates');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function listPrograms($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'listPrograms', 'ListPrograms');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function programChange($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'programChange', 'ProgramChange');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function updateAffiliate($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'updateAffiliate', 'UpdateAffiliate');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getInitialDeposits($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getInitialDeposits', 'GetInitialDeposits');
    }
}
