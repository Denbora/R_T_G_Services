<?php

namespace denbora\R_T_G_Services\services\REST;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class ReportService extends RestService
{
    /**
     * First part in url after /api/
     */
    const APIURL = 'reports';

    /**
     * @param $query
     * @param null $array
     * @param string $endpoint
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    private function callGet($query, $array = null, $endpoint = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::APIURL, $array, $endpoint));
        }
        return false;
    }

    /**
     * @param string $query
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getAuditTrail($query = '')
    {
        return $this->callGet($query, '', 'audit-trail');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getActiveSessions($query = '')
    {
        return $this->callGet($query, '', 'active-sessions');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getDepositors($query = '')
    {
        return $this->callGet($query, '', 'depositors');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayerDepositors($query = '')
    {
        return $this->callGet($query, '', 'player-depositors');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getGameStatistics($query = '')
    {
        return $this->callGet($query, '', 'game-statistics');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getAccountsDelta($query = '')
    {
        return $this->callGet($query, '', 'accounts-delta');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getTransactions($query = '')
    {
        return $this->callGet($query, '', 'transactions');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getAffiliates($query = '')
    {
        return $this->callGet($query, '', 'affiliates');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getLastGamesPlayed($query = '')
    {
        return $this->callGet($query, '', 'last-games-played');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getTransactionHistory($query = '')
    {
        return $this->callGet($query, '', 'transaction-history');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getGamingStats($query = '')
    {
        return $this->callGet($query, '', 'gaming-stats');
    }
}
