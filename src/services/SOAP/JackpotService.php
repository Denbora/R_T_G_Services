<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class JackpotService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getProgressiveJackpot($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getProgressiveJackpot', 'GetProgressiveJackpot');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getProgressiveJackpots($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getProgressiveJackpots', 'GetProgressiveJackpots');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getLastJackpotWinners($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getLastJackpotWinners', 'GetLastJackpotWinners');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getLastJackpotWinnersBySkin($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getLastJackpotWinnersBySkin', 'GetLastJackpotWinnersBySkin');
    }
}
