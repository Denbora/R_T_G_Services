<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

/**
 * Class HistoryService
 * @package denbora\R_T_G_Services\services\RESTv2
 * @deprecated this service is not working :(
 */
class HistoryService extends RestV2Service
{
    const SERVICE_NAME = 'History';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getRsvsGameDetailsHistoryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetRsvsGameDetailsHistory', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getBoardGameDetailsHistoryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetBoardGameDetailsHistory', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getWarHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetWarHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getKenoHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetKenoHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getBingoHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetBingoHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCrapsHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCrapsHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getRsvsHistoryWithIconsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetRsvsHistoryWithIcons', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getSicBoHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetSicBoHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getBaccaratHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetBaccaratHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getRouletteHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetRouletteHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getBlackjackHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetBlackjackHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getShootingGameDetailsHistoryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetShootingGameDetailsHistory', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getLetEmRideHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetLetEmRideHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getVideoPokerHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetVideoPokerHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPaiGowPokerHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPaiGowPokerHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getScratchCardsHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetScratchCardsHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getSlotsThreeReelsHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetSlotsThreeReelsHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCaribbeanDrawHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCaribbeanDrawHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCaribbeanStudHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCaribbeanStudHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getTriCardPokerHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetTriCardPokerHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCaribbeanHoldemHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCaribbeanHoldemHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getSevenStudPokerHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetSevenStudPokerHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getRsvsHistoryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetRsvsHistory', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getEuropeanSlotsPokerHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetEuropeanSlotsPokerHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getMultiPlayerRouletteHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetMultiPlayerRouletteHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getMultiHandVideoPokerHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetMultiHandVideoPokerHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getVegasThreeCardRummyHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetVegasThreeCardRummyHistoryDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getVideoPokerHistoryListDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetVideoPokerHistoryListDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getTexasHoldemBonusPokerHistoryDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetTexasHoldemBonusPokerHistoryDetail', $queryJSON);
    }
}
