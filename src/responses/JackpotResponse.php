<?php

namespace denbora\R_T_G_Services\responses;

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
     */
    public function getProgressiveJackpot($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getProgressiveJackpots($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getLastJackpotWinners($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getLastJackpotWinnersBySkin($response)
    {
        return $this->baseTrim($response);
    }
}
