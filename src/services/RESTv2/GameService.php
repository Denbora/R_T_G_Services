<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class GameService extends RestV3Service
{
    const SERVICE_NAME = 'Game';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getExternalGamesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetExternalGames', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getRecommendedGamesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetRecommendedGames', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getGameDetailsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetGameDetails', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getFavoriteGamesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetFavoriteGames', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getFavoriteFlashGamesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetFavoriteFlashGames', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getGamesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetGames', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getActiveFlashGamesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetActiveFlashGames', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getFlashGamesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetFlashGames', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getActiveGamesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetActiveGames', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function blockGamesPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'BlockGames', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function addGamePOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'AddGame', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function removeGameDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'RemoveGame', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function closePendingGamesByListDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ClosePendingGamesByList', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function closePendingGamesDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ClosePendingGames', $queryJSON);
    }
}
