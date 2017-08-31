<?php

namespace denbora\R_T_G_Services\services\REST;

class GameService extends RestService
{
    /**
     * First part in url after /api/
     */
    const APIURL = 'games';

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
    public function getGames($query = '')
    {
        return $this->callGet($query);
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getDetails($query = '')
    {
        return $this->callGet($query, array('gameId'), 'details');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getFlash($query = '')
    {
        return $this->callGet($query, '', 'flash');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getActive($query = '')
    {
        return $this->callGet($query, '', 'active');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getFavorite($query = '')
    {
        return $this->callGet($query, '', 'favorite');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getActiveFlash($query = '')
    {
        return $this->callGet($query, '', 'active-flash');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getFavoriteFlash($query = '')
    {
        return $this->callGet($query, '', 'favorite-flash');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function postBlock($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, '', 'block'),
                $query
            );
        }
    }
}
