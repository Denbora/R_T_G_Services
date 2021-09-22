<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class TournamentService extends RestV3Service
{
    const SERVICE_NAME = 'Tournament';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCasinoListGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCasinoList', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getSlotTournamentDetailsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetSlotTournamentDetails', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getSlotTournamentsListGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetSlotTournamentsList', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerClassListPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerClassList', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getRestrictedTournamentsPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetRestrictedTournaments', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getUnRestrictedTournamentsPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetUnRestrictedTournaments', $queryJSON);
    }
}
