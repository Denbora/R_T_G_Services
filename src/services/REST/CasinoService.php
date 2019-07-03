<?php

namespace denbora\R_T_G_Services\services\REST;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class CasinoService extends RestService
{
    /**
     * First part in url after /api/
     */
    const API_URL = 'casino';

    /**
     * Get skins
     *
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getSkins($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::API_URL, '', 'skins'));
        }
        return false;
    }

    /**
     * Get clients
     *
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getClients($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::API_URL, '', 'clients'));
        }
        return false;
    }

    /**
     * Get totals
     *
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getTotals($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::API_URL, '', 'totals'));
        }
        return false;
    }
}
