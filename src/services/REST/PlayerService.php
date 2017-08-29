<?php

namespace denbora\R_T_G_Services\services\REST;

class PlayerService extends RestService
{
    /**
     * First part in url after /api/
     */
    const APIURL = 'players';

    /**
     * @param $query
     * @param string $endpoint
     * @param null|array $array
     * @return mixed
     */
    private function callGet($query, $array = null, $endpoint = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createFullUrl($query, self::APIURL, $array, $endpoint));
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getPlayers($query = '')
    {
        return $this->callGet($query);
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getPlayerAccountBalance($query = '')
    {
        return $this->callGet($query, array('playerId'));
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getBaccaratHistory($query = '')
    {
        return $this->callGet($query, array('playerId'), 'baccarat-history');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getBlackjackHistory($query = '')
    {
        return $this->callGet($query, array('playerId'), 'blackjack-history');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getRouletteHistory($query = '')
    {
        return $this->callGet($query, array('playerId'), 'roulette-history');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getRsvsHistory($query = '')
    {
        return $this->callGet($query, array('playerId'), 'rsvs-history');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getGamingActivity($query = '')
    {
        return $this->callGet($query, array('playerId'), 'gaming-activity');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getPlayer($query = '')
    {
        return $this->callGet($query, array('playerId'));
    }

    public function putPlayer($query = '')
    {
        var_dump($query);
        die();
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function postPlayer($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post($this->createFullUrl('', self::APIURL, '', ''), $query);
        }
    }

    public function postPlayerNotes($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, array('only' => 'playerId'), null, 'notes'),
                $query
            );
        }
    }
}
