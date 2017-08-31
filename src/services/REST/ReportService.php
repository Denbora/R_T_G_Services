<?php

namespace denbora\R_T_G_Services\services\REST;

class ReportService extends RestService
{
    /**
     * First part in url after /api/
     */
    const APIURL = 'reports';

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
    public function getAuditTrail($query = '')
    {
        return $this->callGet($query, '', 'audit-trail');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getActiveSessions($query = '')
    {
        return $this->callGet($query, '', 'active-sessions');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getDepositors($query = '')
    {
        return $this->callGet($query, '', 'depositors');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getPlayerDepositors($query = '')
    {
        return $this->callGet($query, '', 'player-depositors');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getGameStatistics($query = '')
    {
        return $this->callGet($query, '', 'game-statistics');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getAccountsDelta($query = '')
    {
        return $this->callGet($query, '', 'accounts-delta');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getTransactions($query = '')
    {
        return $this->callGet($query, '', 'transactions');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getAffiliates($query = '')
    {
        return $this->callGet($query, '', 'affiliates');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getLastGamesPlayed($query = '')
    {
        return $this->callGet($query, '', 'last-games-played');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getTransactionHistory($query = '')
    {
        return $this->callGet($query, '', 'transaction-history');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getGamingStats($query = '')
    {
        return $this->callGet($query, '', 'gaming-stats');
    }
}
