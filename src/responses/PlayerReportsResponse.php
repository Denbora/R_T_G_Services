<?php

namespace denbora\R_T_G_Services\responses;

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
     */
    public function getPlayerDepositors($response)
    {
        return $this->baseTrim($response)->PlayerDepositorInfo;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerDepositorsByDepositCount($response)
    {
        return $this->baseTrim($response)->PlayerDepositorInfo;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerFullGameStatsDetail($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerGameStats($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerLastGamesPlayed($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerNonDepositors($response)
    {
        return $this->baseTrim($response)->PlayerDepositorInfo;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayersByDepositDate($response)
    {
        return $this->baseTrim($response)->PlayerByDepositDate;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayersTransactions($response)
    {
        return $this->baseTrim($response)->PlayerTransaction;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerTransactions($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerBalanceSummary($response)
    {
        return $this->baseTrim($response);
    }
}
