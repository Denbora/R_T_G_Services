<?php

namespace denbora\R_T_G_Services\responses;

class TournamentResponse extends BaseResponse implements SoapResponseInterface
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
    public function getTournamentList($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getTournamentDetails($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getCasinoList($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayerClassList($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getUnRestrictedTournaments($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getRestrictedTournaments($response)
    {
        return $this->baseTrim($response);
    }
}
