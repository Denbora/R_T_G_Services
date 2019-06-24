<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class GameHistoryService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getBaccaratHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getBaccaratHistory', 'GetBaccaratHistory');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getGameDetailXML($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGameDetailXML', 'GetGameDetailXML');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getBlackjackHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getBlackjackHistory', 'GetBlackjackHistory');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerGamingActivity($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerGamingActivity', 'GetPlayerGamingActivity');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getRouletteHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRouletteHistory', 'GetRouletteHistory');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getRSVSSummaryHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRSVSSummaryHistory', 'GetRSVSSummaryHistory');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getRSVSGameDetailsHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRSVSGameDetailsHistory', 'GetRSVSGameDetailsHistory');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getRSVSGameDetailsHistoryWithIcons($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRSVSGameDetailsHistoryWithIcons', 'GetRSVSGameDetailsHistoryWithIcons');
    }
}
