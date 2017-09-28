<?php

namespace denbora\R_T_G_Services\responses;

class GameHistoryResponse extends BaseResponse implements SoapResponseInterface
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
    public function getBaccaratHistory($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getGameDetailXML($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getBlackjackHistory($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerGamingActivity($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getRouletteHistory($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getRSVSSummaryHistory($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getRSVSGameDetailsHistory($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getRSVSGameDetailsHistoryWithIcons($response)
    {
        return $this->baseTrim($response);
    }
}
