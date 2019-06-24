<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class GameResponse extends BaseResponse implements SoapResponseInterface
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
     * @param $key
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    protected function gameTrim($response, $key)
    {
        if ($response->$key->HasErrors) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix .
                'RTG ErrorCode - ' . $response->$key->ErrorCode . '; ' .
                'Message - ' . $response->$key->Message);
        } else {
            return $response->$key->Data;
        }
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getGame($response)
    {
        return $this->gameTrim($response, 'GetGameResult');
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getGames($response)
    {
        return $this->gameTrim($response, 'GetGamesResult');
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getGamesBySkin($response)
    {
        return $this->gameTrim($response, 'GetGamesBySkinResult');
    }

    /**
     * @param $response
     * @return \SimpleXMLElement
     * @throws R_T_G_ServiceException
     */
    public function getFlashCasinoConfiguration($response)
    {
        $xml = $this->gameTrim($response, 'GetFlashCasinoConfigurationResult')->string;
        $data = simplexml_load_string(urldecode($xml));
        return $data;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getFlashGameInfo($response)
    {
        return $this->gameTrim($response, 'GetFlashGameInfoResult');
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getActiveGames($response)
    {
        return $this->gameTrim($response, 'GetActiveGamesResult');
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getActiveFlashGamesInfo($response)
    {
        return $this->gameTrim($response, 'GetActiveFlashGamesInfoResult');
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function resetPlayerSpecialFeatures($response)
    {
        return $this->gameTrim($response, 'ResetPlayerSpecialFeaturesResult');
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getGameList($response)
    {
        return $this->gameTrim($response, 'GetGameListResult');
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getFlashGameList($response)
    {
        return $this->gameTrim($response, 'GetFlashGameListResult');
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function lockUnlockGamesByPID($response)
    {
        return $this->gameTrim($response, 'LockUnlockGamesByPIDResult');
    }
}
