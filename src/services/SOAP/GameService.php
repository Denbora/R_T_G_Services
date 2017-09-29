<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class GameService extends ServiceBase implements ServiceInterface
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
    protected function getGame($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGame', 'GetGame');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getGames($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGames', 'GetGames');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getGamesBySkin($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGamesBySkin', 'GetGamesBySkin');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getFlashCasinoConfiguration($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getFlashCasinoConfiguration', 'GetFlashCasinoConfiguration');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getFlashGameInfo($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getFlashGameInfo', 'GetFlashGameInfo');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getActiveGames($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getActiveGames', 'GetActiveGames');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getFlashGamesInfo($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getFlashGamesInfo', 'GetFlashGamesInfo');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getActiveFlashGamesInfo($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getActiveFlashGamesInfo', 'GetActiveFlashGamesInfo');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function resetPlayerSpecialFeatures($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'resetPlayerSpecialFeatures', 'ResetPlayerSpecialFeatures');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getGameList($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGameList', 'GetGameList');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getFlashGameList($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getFlashGameList', 'GetFlashGameList');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function lockUnlockGamesByPID($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'lockUnlockGamesByPID', 'LockUnlockGamesByPID');
    }
}
