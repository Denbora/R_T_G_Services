<?php

namespace denbora\R_T_G_Services\services\REST;

class CashierService extends RestService
{
    /**
     * First part in url after /api/
     */
    const APIURL = 'cashier';

    /**
     * @param string $query
     * @return mixed
     */
    public function postCommonWalletDeposit($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, '', 'common-wallet-deposit'),
                $query
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function postCommonWalletWithdrawal($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, '', 'common-wallet-withdrawal'),
                $query
            );
        }
    }
}
