<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class AffiliateService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $serviceMethod string
     * @param $data
     * @param bool $rawResponse
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function call(string $serviceMethod, $data, bool $rawResponse = false)
    {
        if (in_array($serviceMethod, $this->classMethods)) {
            try {
                $serviceResponse = $this->$serviceMethod($data, $rawResponse);

                return $serviceResponse;
            } catch (\SoapFault $e) {
                $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
                throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
            }
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $serviceMethod .' does not exist');
        }
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @param $validatorName
     * @param $service
     * @return object
     */
    private function run($data, bool $rawResponse, $validatorName, $service)
    {
        $this->validator->call($validatorName, $data);

        return $this->service($service, $data, $rawResponse);
    }

    /**
     * @param string $globalID
     * @param bool $rawResponse
     * @return object
     */
    protected function listGlobalLinked(string $globalID, bool $rawResponse)
    {
        return $this->run(array('GlobalID' => $globalID), $rawResponse, 'listGlobalLinked', 'ListGlobalLinked');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function createAffiliate($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'createAffiliate', 'CreateAffiliate');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function createProgram($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'createProgram', 'CreateProgram');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getAccountLedger($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getAccountLedger', 'GetAccountLedger');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getAccountLedgerAll($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getAccountLedgerAll', 'GetAccountLedgerAll');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getBannedDeactivatedPlayers($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getBannedDeactivatedPlayers', 'GetBannedDeactivatedPlayers');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getBannedDeactivatedPlayersALL($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getBannedDeactivatedPlayersALL', 'GetBannedDeactivatedPlayersALL');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getDownloadInformation($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getDownloadInformation', 'GetDownloadInformation');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getDownloadInformationAll($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getDownloadInformationAll', 'GetDownloadInformationAll');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
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
     */
    protected function getNewPlayerSignups($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getNewPlayerSignups', 'GetNewPlayerSignups');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getNewPlayerSignupsByAID($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getNewPlayerSignupsByAID', 'GetNewPlayerSignupsByAID');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerSummary($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerSummary', 'GetPlayerSummary');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerSummaryALL($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerSummaryALL', 'GetPlayerSummaryALL');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerSummaryByAIDRange($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerSummaryByAIDRange', 'GetPlayerSummaryByAIDRange');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayersCount($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayersCount', 'GetPlayersCount');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getStatsSummary($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getStatsSummary', 'GetStatsSummary');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getStatsSummaryByAID($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getStatsSummaryByAID', 'GetStatsSummaryByAID');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getDownloadTrackingIDsByAID($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getDownloadTrackingIDsByAID', 'GetDownloadTrackingIDsByAID');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
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
     */
    protected function getUnbannedPlayers($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getUnbannedPlayers', 'GetUnbannedPlayers');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function globalLink($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'globalLink', 'GlobalLink');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function listAffiliates($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'listAffiliates', 'ListAffiliates');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function listPrograms($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'listPrograms', 'ListPrograms');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function programChange($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'programChange', 'ProgramChange');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function updateAffiliate($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'updateAffiliate', 'UpdateAffiliate');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getInitialDeposits($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getInitialDeposits', 'GetInitialDeposits');
    }
}
