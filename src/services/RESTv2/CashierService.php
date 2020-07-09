<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class CashierService extends RestV2Service
{
    const SERVICE_NAME = 'Cashier';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function cashbackGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'Cashback', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCashierSettingsPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCashierSettings', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function chargebackPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'Chargeback', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function depositCommonWalletPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'DepositCommonWallet', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function withdrawalCommonWalletPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'WithdrawalCommonWallet', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function bankingMethodsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetBankingMethods', $queryJSON);
    }
}
