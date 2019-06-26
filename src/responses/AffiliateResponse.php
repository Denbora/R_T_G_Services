<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use SimpleXMLElement;

class AffiliateResponse extends BaseResponse implements SoapResponseInterface
{
    /**
     * @param $response
     * @param $responseName
     * @return mixed|null
     */
    private function getAffiliateData($response, $responseName)
    {
        $xml = $response->$responseName->any;
        $data = simplexml_load_string($xml);
        $array = (array)$data->NewDataSet;
        if (empty($array)) {
            return null;
        } else {
            return $array['Table'];
        }
    }

    /**
     * @param $response
     * @return mixed
     */
    public function rawResponse($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed|null
     */
    public function listGlobalLinked($response)
    {
        return $this->getAffiliateData($response, 'ListGlobalLinkedResult');
    }

    /**
     * @param $response
     * @return bool
     */
    public function createAffiliate($response)
    {
        return $this->getAffiliateData($response, 'CreateAffiliateResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function createProgram($response)
    {
        return $this->getAffiliateData($response, 'CreateProgramResult');
    }

    /**
     * @param $response
     * @return SimpleXMLElement
     */
    public function getAccountLedger($response)
    {
        $xml = $response->GetAccountLedgerResult->any;
        $data = simplexml_load_string($xml);

        return $data;
    }

    /**
     * @param $response
     * @return SimpleXMLElement
     */
    public function getAccountLedgerAll($response)
    {
        return $this->getAffiliateData($response, 'GetAccountLedgerAllResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getBannedDeactivatedPlayers($response)
    {
        return $this->getAffiliateData($response, 'GetBannedDeactivatedPlayersResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getBannedDeactivatedPlayersALL($response)
    {
        return $this->getAffiliateData($response, 'GetBannedDeactivatedPlayersALLResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getDownloadInformation($response)
    {
        return $this->getAffiliateData($response, 'GetDownloadInformationResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getDownloadInformationAll($response)
    {
        return $this->getAffiliateData($response, 'GetDownloadInformationAllResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getDownloadInformationByDateRange($response)
    {
        return $this->getAffiliateData($response, 'GetDownloadInformationByDateRangeResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getGlobalAffiliateStatsByLocalAID($response)
    {
        return $this->getAffiliateData($response, 'GetGlobalAffiliateStatsByLocalAIDResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getNewPlayerSignups($response)
    {
        return $this->getAffiliateData($response, 'GetNewPlayerSignupsResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getNewPlayerSignupsByAID($response)
    {
        return $this->getAffiliateData($response, 'GetNewPlayerSignupsByAIDResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerSummary($response)
    {
        return $this->getAffiliateData($response, 'GetPlayerSummaryResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerSummaryALL($response)
    {
        return $this->getAffiliateData($response, 'GetPlayerSummaryALLResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerSummaryByAIDRange($response)
    {
        return $this->getAffiliateData($response, 'GetPlayerSummaryByAIDRangeResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayersCount($response)
    {
        return $this->getAffiliateData($response, 'GetPlayersCountResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getStatsSummary($response)
    {
        return $this->getAffiliateData($response, 'GetStatsSummaryResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getStatsSummaryByAID($response)
    {
        return $this->getAffiliateData($response, 'GetStatsSummaryByAIDResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getDownloadTrackingIDsByAID($response)
    {
        $obj = $this->getAffiliateData($response, 'GetDownloadTrackingIDsByAIDResult');

        $stringIds = $obj->NewDepositorsDownloadTrackingIDs;
        $ids = explode(",", $stringIds);

        $array = (array)$obj;
        unset($array['NewDepositorsDownloadTrackingIDs']);
        $array['TrackingIDs'] = $ids;

        return $array;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getDownloadTrackingIDsByDateRange($response)
    {
        return $this->getAffiliateData($response, 'GetDownloadTrackingIDsByDateRangeResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getUnBannedPlayers($response)
    {
        return $this->getAffiliateData($response, 'GetUnBannedPlayersResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function globalLink($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function listAffiliates($response)
    {
        return $this->getAffiliateData($response, 'ListAffiliatesResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function listPrograms($response)
    {
        return $this->getAffiliateData($response, 'ListProgramsResult');
    }

    /**
     * @param $response
     * @return bool
     */
    public function programChange($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function updateAffiliate($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getInitialDeposits($response)
    {
        return $this->getAffiliateData($response, 'GetInitialDepositsResult');
    }
}
