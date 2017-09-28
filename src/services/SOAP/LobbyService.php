<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class LobbyService extends ServiceBase implements ServiceInterface
{
    /**
     * @param $serviceMethod string
     * @param $data
     * @param bool $rawResponse
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function call(string $serviceMethod, $data, bool $rawResponse = false)
    {
        if (in_array($serviceMethod, $this->classMethods)) {
            try {
                $serviceResponse = $this->$serviceMethod($data, $rawResponse);

                return $serviceResponse;
            } catch (\SoapFault $e) {
                $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
                throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
            }
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $serviceMethod .' does not exist');
        }
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @param $validatorName
     * @param $service
     * @return object
     */
    private function run($data, bool $rawResponse, $validatorName, $service)
    {
        $this->validator->call($validatorName, $data);

        return $this->service($service, $data, $rawResponse);
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function addToFavorite($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'addToFavorite', 'AddToFavorite');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function addToFavoriteByGame($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'addToFavoriteByGame', 'AddToFavoriteByGame');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getAccountBalance($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getAccountBalance', 'GetAccountBalance');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getActiveMessages($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getActiveMessages', 'GetActiveMessages');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getCacheState($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCacheState', 'GetCacheState');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getComponents($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getComponents', 'GetComponents');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getCurrentTheme($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCurrentTheme', 'GetCurrentTheme');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getGameInformation($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGameInformation', 'GetGameInformation');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getJackPot($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getJackPot', 'GetJackPot');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getLanguageCode($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getLanguageCode', 'GetLanguageCode');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getLastGamesPlayed($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getLastGamesPlayed', 'GetLastGamesPlayed');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getLocaleInfo($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getLocaleInfo', 'GetLocaleInfo');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getMarquee($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getMarquee', 'GetMarquee');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getMenus($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getMenus', 'GetMenus');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getMenuStructure($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getMenuStructure', 'GetMenuStructure');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getMobileMenu($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getMobileMenu', 'GetMobileMenu');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getRestrictedGames($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRestrictedGames', 'GetRestrictedGames');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getSessionHash($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getSessionHash', 'GetSessionHash');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getTopGamesPlayed($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getTopGamesPlayed', 'GetTopGamesPlayed');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getTopLocalAuslotJackpots($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getTopLocalAuslotJackpots', 'GetTopLocalAuslotJackpots');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function turnOnCacheState($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'turnOnCacheState', 'TurnOnCacheState');
    }
}
