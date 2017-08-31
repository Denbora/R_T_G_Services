<?php

namespace denbora\R_T_G_Services\services\REST;

class SettingsService extends RestService
{
    /**
     * First part in url after /api/
     */
    const APIURL = 'settings';

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
    public function getPlayerRestrictions($query = '')
    {
        return $this->callGet($query, '', 'player-restrictions');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getAccountFields($query = '')
    {
        return $this->callGet($query, '', 'account-fields');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getLoginFields($query = '')
    {
        return $this->callGet($query, '', 'login-fields');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getFlashConfig($query = '')
    {
        return $this->callGet($query, '', 'flash-config');
    }
}
