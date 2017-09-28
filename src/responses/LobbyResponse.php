<?php

namespace denbora\R_T_G_Services\responses;

use SimpleXMLElement;

class LobbyResponse extends BaseResponse implements SoapResponseInterface
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
     * @param $responseName
     * @return SimpleXMLElement
     */
    private function getLobbyData($response, $responseName)
    {
        $xml = $response->$responseName->any;
        $data = simplexml_load_string($xml);
        return $data;
    }

    /**
     * @param $response
     * @param $responseName
     * @return array
     */
    private function getValuesFromDataSet($response, $responseName)
    {
        $xml = $response->$responseName->any;

        $first = stristr($xml, '<NewDataSet>');
        $second = stristr($first, '</diffgr:diffgram>', true);
        $finalString = preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/i", '<$1$2>', $second);

        $data = simplexml_load_string($finalString);

        $array = (array) $data;

        return $array['Table'];
    }

    /**
     * @param $response
     * @return mixed
     */
    public function addToFavorite($response)
    {
        return $this->getLobbyData($response, 'AddToFavoriteResult');
    }

    /**
     * @param $response
     * @return \SimpleXMLElement
     */
    public function addToFavoriteByGame($response)
    {
        return $this->getLobbyData($response, 'AddToFavoriteByGameResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getAccountBalance($response)
    {
        return $this->getValuesFromDataSet($response, 'GetAccountBalanceResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getActiveMessages($response)
    {
        return $this->getValuesFromDataSet($response, 'GetActiveMessagesResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getCacheState($response)
    {
        return $this->getValuesFromDataSet($response, 'GetCacheStateResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getComponents($response)
    {
        return $this->getValuesFromDataSet($response, 'GetComponentsResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getCurrentTheme($response)
    {
        return $this->getValuesFromDataSet($response, 'GetCurrentThemeResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getGameInformation($response)
    {
        return $this->getValuesFromDataSet($response, 'GetGameInformationResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getJackPot($response)
    {
        return $this->getValuesFromDataSet($response, 'GetJackPotResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getLanguageCode($response)
    {
        return $this->getValuesFromDataSet($response, 'GetLanguageCodeResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getLastGamesPlayed($response)
    {
        return $this->getValuesFromDataSet($response, 'GetLastGamesPlayedResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getLocaleInfo($response)
    {
        $xml = $response->GetLocaleInfoResult->any;

        $first = stristr($xml, '<NewDataSet>');
        $second = stristr($first, '</diffgr:diffgram>', true);
        $finalString = preg_replace("/<(Table*)[^>]*?(\/?)>/i", '<$1$2>', $second);

        $data = simplexml_load_string($finalString);

        $array = (array) $data;

        return $array['Table'];
    }

    /**
     * @param $response
     * @return array
     */
    public function getMarquee($response)
    {
        return $this->getValuesFromDataSet($response, 'GetMarqueeResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getMenus($response)
    {
        return $this->getValuesFromDataSet($response, 'GetMenusResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getMenuStructure($response)
    {
        $xml = $response->GetMenuStructureResult->any;

        $first = stristr($xml, '<NewDataSet>');
        $second = stristr($first, '</diffgr:diffgram>', true);
        $finalString = preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/i", '<$1$2>', $second);

        $data = simplexml_load_string($finalString);

        $array = (array) $data;
        return $array['SubMenusOfMenu1'];
    }

    /**
     * @param $response
     * @return array
     */
    public function getMobileMenu($response)
    {
        return $this->getValuesFromDataSet($response, 'GetMobileMenuResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getRestrictedGames($response)
    {
        return $this->getValuesFromDataSet($response, 'GetRestrictedGamesResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getSessionHash($response)
    {
        return $this->getValuesFromDataSet($response, 'GetSessionHashResult');
    }

    /**
     * @param $response
     * @return array
     */
    public function getTopGamesPlayed($response)
    {
        $xml = $response->GetTopGamesPlayedResult->any;

        $first = stristr($xml, '<NewDataSet>');
        $second = stristr($first, '</diffgr:diffgram>', true);
        $finalString = preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/i", '<$1$2>', $second);

        $data = simplexml_load_string($finalString);

        $array = (array) $data;

        return $array['TopGamesPlayed'];
    }

    /**
     * @param $response
     * @return array
     */
    public function getTopLocalAuslotJackpots($response)
    {
        $xml = $response->GetTopLocalAuslotJackpotsResult->any;

        $first = stristr($xml, '<NewDataSet>');
        $second = stristr($first, '</diffgr:diffgram>', true);
        $finalString = preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/i", '<$1$2>', $second);

        $data = simplexml_load_string($finalString);

        $array = (array) $data;

        return $array['TopLocalJackpots'];
    }

    /**
     * @param $response
     * @return array
     */
    public function turnOnCacheState($response)
    {
        return $response;
    }
}
