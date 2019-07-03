<?php

namespace denbora\R_T_G_Services\services\REST;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class GameService extends RestService
{
    /**
     * First part in url after /api/
     */
    const API_URL = 'games';

    /**
     * @param $query
     * @param null $array
     * @param string $endpoint
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    private function callGet($query, $array = null, $endpoint = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::API_URL, $array, $endpoint));
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getGames($query = '')
    {
        return $this->callGet($query);
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getDetails($query = '')
    {
        return $this->callGet($query, array('gameId'), 'details');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getFlash($query = '')
    {
        return $this->callGet($query, '', 'flash');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getActive($query = '')
    {
        return $this->callGet($query, '', 'active');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getFavorite($query = '')
    {
        return $this->callGet($query, '', 'favorite');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getActiveFlash($query = '')
    {
        return $this->callGet($query, '', 'active-flash');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getFavoriteFlash($query = '')
    {
        return $this->callGet($query, '', 'favorite-flash');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postBlock($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'block'),
                $query
            );
        }
        return false;
    }
}
