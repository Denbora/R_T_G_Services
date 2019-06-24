<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class DataCollectService extends ServiceBase implements ServiceInterface
{
    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerGameStats($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerGameStats', 'GetPlayerGameStats');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerGameStatsByDateRange($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerGameStatsByDateRange', 'GetPlayerGameStatsByDateRange');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerSessions($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerSessions', 'GetPlayerSessions');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayer21GamesHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayer21GamesHistory', 'GetPlayer21GamesHistory');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getCasinoStats($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCasinoStats', 'GetCasinoStats');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerGameStatsDetail($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerGameStatsDetail', 'GetPlayerGameStatsDetail');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerGameStatsDetailByGame($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerGameStatsDetailByGame', 'getPlayerGameStatsDetailByGame');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerGameStatsDetailByGameBySession($data, bool $rawResponse)
    {
        return $this->run(
            $data,
            $rawResponse,
            'getPlayerGameStatsDetailByGameBySession',
            'GetPlayerGameStatsDetailByGameBySession'
        );
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerGameStatsBySession($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerGameStatsBySession', 'GetPlayerGameStatsBySession');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getGameIDs($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGameIDs', 'GetGameIDs');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getLocalCurrency($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getLocalCurrency', 'GetLocalCurrency');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getGameDetailSummary($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGameDetailSummary', 'GetGameDetailSummary');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getCasinoSummaryData($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCasinoSummaryData', 'GetCasinoSummaryData');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getCasinoSummaryByAffiliate($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCasinoSummaryByAffiliate', 'GetCasinoSummaryByAffiliate');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getCasinoSummaryDataBySkin($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCasinoSummaryDataBySkin', 'GetCasinoSummaryDataBySkin');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getRSVSJackpotsByPID($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRSVSJackpotsByPID', 'GetRSVSJackpotsByPID');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getRSVSJackpotsAll($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRSVSJackpotsAll', 'GetRSVSJackpotsAll');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getNewDepositors($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getNewDepositors', 'GetNewDepositors');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getNewDepositorsBySkin($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getNewDepositorsBySkin', 'GetNewDepositorsBySkin');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function generateReport($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'generateReport', 'GenerateReport');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function generateReportWithFormat($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'generateReportWithFormat', 'GenerateReportWithFormat');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getBaccaratGamesHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getBaccaratGamesHistory', 'GetBaccaratGamesHistory');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getRouletteGamesHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRouletteGamesHistory', 'getRouletteGamesHistory');
    }
}
