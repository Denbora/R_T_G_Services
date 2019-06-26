<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class PlayerReportsResponse extends BaseResponse implements SoapResponseInterface
{

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
     * @throws R_T_G_ServiceException
     */
    public function getPlayerDepositors($response)
    {
        return $this->baseTrim($response)->PlayerDepositorInfo;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayerDepositorsByDepositCount($response)
    {
        return $this->baseTrim($response)->PlayerDepositorInfo;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayerFullGameStatsDetail($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayerGameStats($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayerLastGamesPlayed($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayerNonDepositors($response)
    {
        return $this->baseTrim($response)->PlayerDepositorInfo;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayersByDepositDate($response)
    {
        return $this->baseTrim($response)->PlayerByDepositDate;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayersTransactions($response)
    {
        return $this->baseTrim($response)->PlayerTransaction;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayerTransactions($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayerBalanceSummary($response)
    {
        return $this->baseTrim($response);
    }
}
