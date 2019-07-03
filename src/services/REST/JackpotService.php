<?php

namespace denbora\R_T_G_Services\services\REST;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class JackpotService extends RestService
{
    /**
     * First part in url after /api/
     */
    const API_URL = 'jackpots';

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getJackpots($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::API_URL, '', ''));
        }
        return false;
    }

    /**
     * @deprecated use {@see JackpotService::getJackpots()}
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getJeckpots($query = '')
    {
        return $this->getJackpots();
    }
}
