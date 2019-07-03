<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class WalletService extends RestV2Service implements RestServiceInterface
{
    const SERVICE_NAME = 'Wallet';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getBalanceGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetBalance', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getNotificationGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetNotification', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function subscribeNotificationPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'SubscribeNotification', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function unsubscribeNotificationDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'UnsubscribeNotification', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getBalancesPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetBalances', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function placeBetPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'PlaceBet', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function cancelBetDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CancelBet', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function placeSettlementPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'PlaceSettlement', $queryJSON);
    }
}
