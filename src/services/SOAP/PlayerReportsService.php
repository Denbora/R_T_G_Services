<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class PlayerReportsService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $daysAgoLastBet
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerDepositors($daysAgoLastBet, bool $rawResponse)
    {
        $data = [
            'DaysAgoLastBet' => $daysAgoLastBet
        ];
        return $this->run($data, $rawResponse, 'getPlayerDepositors', 'GetPlayerDepositors');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerDepositorsByDepositCount($data, bool $rawResponse)
    {
        return $this
            ->run($data, $rawResponse, 'getPlayerDepositorsByDepositCount', 'GetPlayerDepositorsByDepositCount');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerFullGameStatsDetail($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerFullGameStatsDetail', 'GetPlayerFullGameStatsDetail');
    }

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
    protected function getPlayerLastGamesPlayed($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerLastGamesPlayed', 'GetPlayerLastGamesPlayed');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerNonDepositors($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerNonDepositors', 'GetPlayerNonDepositors');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayersByDepositDate($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayersByDepositDate', 'GetPlayersByDepositDate');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayersTransactions($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayersTransactions', 'GetPlayersTransactions');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerTransactions($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerTransactions', 'GetPlayerTransactions');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerBalanceSummary($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerBalanceSummary', 'GetPlayerBalanceSummary');
    }
}
