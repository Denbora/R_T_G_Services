<?php

namespace denbora\R_T_G_Services\responses;

class DataCollectResponse extends BaseResponse implements SoapResponseInterface
{
    /**
     * @param $response
     * @param $responseName
     * @return mixed
     */
    private function getCollectionData($response, $responseName)
    {
        $xml = $response->$responseName->any;

        $data = simplexml_load_string($xml);

        $array =  (array) $data->NewDataSet;

        return $array['Table'];
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
     * @return mixed
     */
    public function getPlayerGameStats($response)
    {
        return $this->getCollectionData($response, 'GetPlayerGameStatsResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerGameStatsByDateRange($response)
    {
        return $this->getCollectionData($response, 'GetPlayerGameStatsByDateRangeResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerSessions($response)
    {
        return $this->getCollectionData($response, 'GetPlayerSessionsResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayer21GamesHistory($response)
    {
        return $this->getCollectionData($response, 'GetPlayer21GamesHistoryResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getCasinoStats($response)
    {
        return $this->getCollectionData($response, 'GetCasinoStatsResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerGameStatsDetail($response)
    {
        return $this->getCollectionData($response, 'GetPlayerGameStatsDetailResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerGameStatsDetailByGame($response)
    {
        return $this->getCollectionData($response, 'GetPlayerGameStatsDetailByGameResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerGameStatsDetailByGameBySession($response)
    {
        return $this->getCollectionData($response, 'GetPlayerGameStatsDetailByGameBySessionResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerGameStatsBySession($response)
    {
        return $this->getCollectionData($response, 'GetPlayerGameStatsBySessionResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getGameIDs($response)
    {
        return $this->getCollectionData($response, 'GetGameIDsResult');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getLocalCurrency($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getGameDetailSummary($response)
    {
        return $this->getCollectionData($response, 'GetGameDetailSummary');
    }

    /**
     * @param $response
     * @return \SimpleXMLElement
     */
    public function getCasinoSummaryData($response)
    {
        $xml = $response->GetCasinoSummaryDataResult->any;
        $data = simplexml_load_string($xml);
        return $data;
    }

    /**
     * @param $response
     * @return \SimpleXMLElement
     */
    public function getCasinoSummaryByAffiliate($response)
    {
        $xml = $response->GetCasinoSummaryByAffiliateResult->any;
        $data = simplexml_load_string($xml);
        return $data;
    }

    /**
     * @param $response
     * @return \SimpleXMLElement
     */
    public function getCasinoSummaryDataBySkin($response)
    {
        $xml = $response->GetCasinoSummaryDataBySkinResult->any;
        $data = simplexml_load_string($xml);
        return $data;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getRSVSJackpotsByPID($response)
    {
        $xml = $response->GetRSVSJackpotsByPIDResult->any;
        $data = simplexml_load_string($xml);
        return $data;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getRSVSJackpotsAll($response)
    {
        $xml = $response->GetRSVSJackpotsAllResult->any;
        $data = simplexml_load_string($xml);
        return $data;
    }

    /**
     * @param $response
     * @return \SimpleXMLElement
     */
    public function getNewDepositors($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getNewDepositorsBySkin($response)
    {
        $xml = $response->GetNewDepositorsBySkinResult->any;
        $data = simplexml_load_string($xml);
        return $data;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function generateReport($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function generateReportWithFormat($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getBaccaratGamesHistory($response)
    {
        $xml = $response->GetBaccaratGamesHistoryResult->any;
        $data = simplexml_load_string($xml);
        return $data;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getRouletteGamesHistory($response)
    {
        $xml = $response->GetRouletteGamesHistoryResult->any;
        $data = simplexml_load_string($xml);
        return $data;
    }
}
