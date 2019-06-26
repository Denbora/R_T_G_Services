<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class TournamentService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getSlotTournamentsList($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getSlotTournamentsList', 'GetSlotTournamentsList');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getSlotTournamentDetails($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getSlotTournamentDetails', 'GetSlotTournamentDetails');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getCasinoList($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCasinoList', 'GetCasinoList');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerClassList($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerClassList', 'GetPlayerClassList');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getUnRestrictedTournaments($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getUnRestrictedTournaments', 'GetUnRestrictedTournaments');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getRestrictedTournaments($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRestrictedTournaments', 'GetRestrictedTournaments');
    }
}
