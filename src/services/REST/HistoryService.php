<?php

namespace denbora\R_T_G_Services\services\REST;

class HistoryService extends RestService
{
    /**
     * First part in url after /api/
     */
    const APIURL = 'history';

    /**
     * @param $query
     * @param null $array
     * @param string $endpoint
     * @return mixed
     */
    private function callGet($query, $array = null, $endpoint = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::APIURL, $array, $endpoint));
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getBaccarat($query = '')
    {
        return $this->callGet($query, '', 'baccarat');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getBingo($query = '')
    {
        return $this->callGet($query, '', 'bingo');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getBlackjack($query = '')
    {
        return $this->callGet($query, '', 'blackjack');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getCaribbeanDraw($query = '')
    {
        return $this->callGet($query, '', 'baccarat');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getCaribbeanHoldem($query = '')
    {
        return $this->callGet($query, '', 'caribbean-holdem');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getCaribbeanStud($query = '')
    {
        return $this->callGet($query, '', 'caribbean-stud');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getCraps($query = '')
    {
        return $this->callGet($query, '', 'craps');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getEuropeanSlotsPoker($query = '')
    {
        return $this->callGet($query, '', 'european-slots-poker');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getKeno($query = '')
    {
        return $this->callGet($query, '', 'keno');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getLetEmRide($query = '')
    {
        return $this->callGet($query, '', 'let-em-ride');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getMultiHandVideoPoker($query = '')
    {
        return $this->callGet($query, '', 'multi-hand-video-poker');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getMultiPlayerRoulette($query = '')
    {
        return $this->callGet($query, '', 'multi-player-roulette');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getPaiGowPoker($query = '')
    {
        return $this->callGet($query, '', 'pai-gow-poker');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getRoulette($query = '')
    {
        return $this->callGet($query, '', 'roulette');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getRsvs($query = '')
    {
        return $this->callGet($query, '', 'rsvs');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getRsvsGameDetails($query = '')
    {
        return $this->callGet($query, '', 'rsvs-game-details');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getRsvsGameDetailsWithIcons($query = '')
    {
        return $this->callGet($query, '', 'rsvs-game-details-with-icons');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getScratchCards($query = '')
    {
        return $this->callGet($query, '', 'scratch-cards');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getSevenStudPoker($query = '')
    {
        return $this->callGet($query, '', 'seven-stud-poker');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getSicBo($query = '')
    {
        return $this->callGet($query, '', 'sic-bo');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getSlots3Reels($query = '')
    {
        return $this->callGet($query, '', 'slots-3-reels');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getTexasHoldemBonusPoker($query = '')
    {
        return $this->callGet($query, '', 'texas-holdem-bonus-poker');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getTriCardPoker($query = '')
    {
        return $this->callGet($query, '', 'tri-card-poker');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getVegasThreeCardRummy($query = '')
    {
        return $this->callGet($query, '', 'vegas-three-card-rummy');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getVideoPoker($query = '')
    {
        return $this->callGet($query, '', 'video-poker');
    }
    /**
     * @param string $query
     * @return mixed
     */
    public function getWar($query = '')
    {
        return $this->callGet($query, '', 'war');
    }
}
