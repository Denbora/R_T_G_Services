<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class JackpotResponse extends BaseResponse implements SoapResponseInterface
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
    public function getProgressiveJackpot($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getProgressiveJackpots($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getLastJackpotWinners($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getLastJackpotWinnersBySkin($response)
    {
        return $this->baseTrim($response);
    }
}
