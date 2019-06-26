<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class GameService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getGame($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGame', 'GetGame');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getGames($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGames', 'GetGames');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getGamesBySkin($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGamesBySkin', 'GetGamesBySkin');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getFlashCasinoConfiguration($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getFlashCasinoConfiguration', 'GetFlashCasinoConfiguration');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getFlashGameInfo($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getFlashGameInfo', 'GetFlashGameInfo');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getActiveGames($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getActiveGames', 'GetActiveGames');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getFlashGamesInfo($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getFlashGamesInfo', 'GetFlashGamesInfo');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getActiveFlashGamesInfo($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getActiveFlashGamesInfo', 'GetActiveFlashGamesInfo');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function resetPlayerSpecialFeatures($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'resetPlayerSpecialFeatures', 'ResetPlayerSpecialFeatures');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getGameList($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGameList', 'GetGameList');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getFlashGameList($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getFlashGameList', 'GetFlashGameList');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function lockUnlockGamesByPID($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'lockUnlockGamesByPID', 'LockUnlockGamesByPID');
    }
}
