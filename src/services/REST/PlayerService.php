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
     * @param null|array $array
     * @param string $endpoint
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
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
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getPlayers($query = '')
    {
        return $this->callGet($query);
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getPlayerAccountBalance($query = '')
    {
        return $this->callGet($query, array('playerId'), 'balance');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getBaccaratHistory($query = '')
    {
        return $this->callGet($query, array('playerId'), 'baccarat-history');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getBlackjackHistory($query = '')
    {
        return $this->callGet($query, array('playerId'), 'blackjack-history');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getRouletteHistory($query = '')
    {
        return $this->callGet($query, array('playerId'), 'roulette-history');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getRsvsHistory($query = '')
    {
        return $this->callGet($query, array('playerId'), 'rsvs-history');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getGamingActivity($query = '')
    {
        return $this->callGet($query, array('playerId'), 'gaming-activity');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getPlayer($query = '')
    {
        return $this->callGet($query, array('playerId'));
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function putPlayer($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::APIURL, array('playerId'), ''),
                $this->removeFromQuery($query, array('playerId'))
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function postPlayer($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post($this->createFullUrl('', self::APIURL, null), $query);
        }
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function postPlayerNotes($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, array('playerId'), 'notes'),
                $this->removeFromQuery($query, array('playerId'))
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getNonCashTotal($query = '')
    {
        return $this->callGet($query, array('playerId'), 'non-cash-total');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getAdjustedNetWin($query = '')
    {
        return $this->callGet($query, array('playerId'), 'adjusted-net-win');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function postToken($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, array('playerId'), 'token'),
                $this->removeFromQuery($query, array('playerId'))
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getLedger($query = '')
    {
        return $this->callGet($query, array('playerId'), 'ledger');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getBalanceSummary($query = '')
    {
        return $this->callGet($query, array('playerId'), 'balance-summary');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getClass($query = '')
    {
        return $this->callGet($query, array('playerId'), 'class');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function putClass($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::APIURL, array('playerId'), 'class'),
                $this->removeFromQuery($query, array('playerId'))
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getPasscode($query = '')
    {
        return $this->callGet($query, array('playerId'), 'passcode');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getNotes($query = '')
    {
        return $this->callGet($query, array('playerId'), 'notes');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function getEmailVerificationStatus($query = '')
    {
        return $this->callGet($query, array('playerId'), 'email-verification-status');
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function putEmailVerificationStatus($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            $status = json_decode($query)->status;
            return $this->put(
                $this->createFullUrl($query, self::APIURL, array('playerId'), 'email-verification-status'),
                $status
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function putResetSpecialFeatures($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::APIURL, array('playerId'), 'reset-special-features'),
                $this->removeFromQuery($query, array('playerId'))
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     * @throws \denbora\R_T_G_Services\R_T_G_ServiceException
     */
    public function postExternal($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, '', 'external'),
                $query
            );
        }
    }
}
