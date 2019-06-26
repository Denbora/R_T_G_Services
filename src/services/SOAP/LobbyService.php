<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class LobbyService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function addToFavorite($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'addToFavorite', 'AddToFavorite');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function addToFavoriteByGame($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'addToFavoriteByGame', 'AddToFavoriteByGame');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getAccountBalance($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getAccountBalance', 'GetAccountBalance');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getActiveMessages($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getActiveMessages', 'GetActiveMessages');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getCacheState($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCacheState', 'GetCacheState');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getComponents($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getComponents', 'GetComponents');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getCurrentTheme($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCurrentTheme', 'GetCurrentTheme');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getGameInformation($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGameInformation', 'GetGameInformation');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getJackPot($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getJackPot', 'GetJackPot');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getLanguageCode($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getLanguageCode', 'GetLanguageCode');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getLastGamesPlayed($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getLastGamesPlayed', 'GetLastGamesPlayed');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getLocaleInfo($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getLocaleInfo', 'GetLocaleInfo');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getMarquee($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getMarquee', 'GetMarquee');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getMenus($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getMenus', 'GetMenus');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getMenuStructure($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getMenuStructure', 'GetMenuStructure');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getMobileMenu($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getMobileMenu', 'GetMobileMenu');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getRestrictedGames($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRestrictedGames', 'GetRestrictedGames');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getSessionHash($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getSessionHash', 'GetSessionHash');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getTopGamesPlayed($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getTopGamesPlayed', 'GetTopGamesPlayed');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getTopLocalAuslotJackpots($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getTopLocalAuslotJackpots', 'GetTopLocalAuslotJackpots');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function turnOnCacheState($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'turnOnCacheState', 'TurnOnCacheState');
    }
}
