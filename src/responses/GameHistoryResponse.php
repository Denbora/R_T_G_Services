<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;

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
     * @throws R_T_G_ServiceException
     */
    public function getBaccaratHistory($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getGameDetailXML($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
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
     * @throws R_T_G_ServiceException
     */
    public function getRouletteHistory($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getRSVSSummaryHistory($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getRSVSGameDetailsHistory($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getRSVSGameDetailsHistoryWithIcons($response)
    {
        return $this->baseTrim($response);
    }
}
