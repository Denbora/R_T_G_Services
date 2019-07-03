<?php

namespace denbora\R_T_G_Services\services\REST;

use denbora\R_T_G_Services\helpers\UrlHelper;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class PlayerService extends RestService
{
    const API_URL = 'players';

    const API_URL_V2 = 'v2/players';

    /**
     * @param $query
     * @param null|array $array
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
    public function getPlayers($query = '')
    {
        return $this->callGet(self::API_URL, $query);
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayerAccountBalance($query = '')
    {
        return $this->callGet($query, array('playerId'), 'balance');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getBaccaratHistory($query = '')
    {
        return $this->callGet($query, array('playerId'), 'baccarat-history');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getBlackjackHistory($query = '')
    {
        return $this->callGet($query, array('playerId'), 'blackjack-history');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getRouletteHistory($query = '')
    {
        return $this->callGet($query, array('playerId'), 'roulette-history');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getRsvsHistory($query = '')
    {
        return $this->callGet($query, array('playerId'), 'rsvs-history');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getGamingActivity($query = '')
    {
        return $this->callGet($query, array('playerId'), 'gaming-activity');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayer($query = '')
    {
        return $this->callGet($query, array('playerId'));
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function putPlayer($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::API_URL, array('playerId'), ''),
                $this->removeFromQuery($query, array('playerId'))
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postPlayer($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post($this->createFullUrl('', self::API_URL, null), $query);
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postPlayerNotes($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, array('playerId'), 'notes'),
                $this->removeFromQuery($query, array('playerId'))
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getNonCashTotal($query = '')
    {
        return $this->callGet($query, array('playerId'), 'non-cash-total');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getAdjustedNetWin($query = '')
    {
        return $this->callGet($query, array('playerId'), 'adjusted-net-win');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postToken($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, array('playerId'), 'token'),
                $this->removeFromQuery($query, array('playerId'))
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getLedger($query = '')
    {
        return $this->callGet($query, array('playerId'), 'ledger');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getBalanceSummary($query = '')
    {
        return $this->callGet($query, array('playerId'), 'balance-summary');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getClass($query = '')
    {
        return $this->callGet($query, array('playerId'), 'class');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function putClass($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::API_URL, array('playerId'), 'class'),
                $this->removeFromQuery($query, array('playerId'))
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getPasscode($query = '')
    {
        return $this->callGet($query, array('playerId'), 'passcode');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getNotes($query = '')
    {
        return $this->callGet($query, array('playerId'), 'notes');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getEmailVerificationStatus($query = '')
    {
        return $this->callGet($query, array('playerId'), 'email-verification-status');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function putEmailVerificationStatus($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            $status = json_decode($query)->status;
            return $this->put(
                $this->createFullUrl($query, self::API_URL, array('playerId'), 'email-verification-status'),
                $status
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function putResetSpecialFeatures($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::API_URL, array('playerId'), 'reset-special-features'),
                $this->removeFromQuery($query, array('playerId'))
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postExternal($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'external'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getClasses(string $query = '')
    {
        $pathPattern = self::API_URL . '/classes';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query), true);

            $this->setRequestAction($pathPattern);
            return $this->get($url, json_encode($query));
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getCouponsActive(string $query = '')
    {
        $pathPattern = self::API_URL . '/{playerId}/coupons/active';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query), true);

            $this->setRequestAction($pathPattern);
            return $this->get($url, json_encode($query));
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getPhoneNumberStatus(string $query = '')
    {
        $pathPattern = self::API_URL . '/{playerId}/phone-number-status';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query), true);

            $this->setRequestAction($pathPattern);
            return $this->get($url, json_encode($query));
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function putPhoneNumberStatus($query = '')
    {
        $pathPattern = self::API_URL . '/{playerId}/phone-number-status';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query));

            $this->setRequestAction($pathPattern);
            return $this->put($url, $query);
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getBalance(string $query = '')
    {
        $pathPattern = self::API_URL . '/{playerId}/balance';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query), true);

            $this->setRequestAction($pathPattern);
            return $this->get($url, json_encode($query));
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getCouponsAvailable(string $query = '')
    {
        $pathPattern = self::API_URL . '/{playerId}/coupons';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query), true);

            $this->setRequestAction($pathPattern);
            return $this->get($url, json_encode($query));
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getCouponDetails(string $query = '')
    {
        $pathPattern = self::API_URL . '/{playerId}/couponDetails';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query), true);

            $this->setRequestAction($pathPattern);
            return $this->get($url, json_encode($query));
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getTokenValidation(string $query = '')
    {
        $pathPattern = self::API_URL . '/{playerId}/token/{playerToken}';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query), true);

            $this->setRequestAction($pathPattern);
            return $this->get($url, json_encode($query));
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getCouponsRedeemed(string $query = '')
    {
        $pathPattern = self::API_URL_V2 . '/coupons';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query), true);

            $this->setRequestAction($pathPattern);
            return $this->get($url, json_encode($query));
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function putCompPoints(string $query = '')
    {
        $pathPattern = self::API_URL . '/{playerId}/comp-points';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query));

            $this->setRequestAction($pathPattern);
            return $this->put($url, json_encode($query));
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function putPromotionVisited(string $query = '')
    {
        $pathPattern = self::API_URL . '/{playerId}/promotions/{promotionId}';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query));

            $this->setRequestAction($pathPattern);
            return $this->put($url, json_encode($query));
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postTransactionFailed(string $query = '')
    {
        $pathPattern = self::API_URL . '/{playerId}/transaction/failed';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query));

            $this->setRequestAction($pathPattern);
            return $this->post($url, json_encode($query));
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postRedeemCompPoints(string $query = '')
    {
        $pathPattern = self::API_URL . '/{playerId}/redeemed-comp-points';

        if ($query != '' || $this->validator->call('validate', $query)) {
            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query), ['amount']);

            $this->setRequestAction($pathPattern);
            return $this->post($url, $query);
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function deleteCoupon(string $query = '')
    {
        $pathPattern = self::API_URL_V2 . '/{playerId}/coupons';

        if ($query != '' || $this->validator->call('validate', $query)) {
            $this->setRequestAction($pathPattern);

            list($url, $query) =
                UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query), ['couponCode']);

            return $this->delete($url, $query);
        }

        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postCouponRedeem(string $query = '')
    {
        $pathPattern = self::API_URL_V2 . '/{playerId}/coupons';
        list($url, $query) = UrlHelper::createFullUrl($this->baseUrl, $pathPattern, json_decode($query), true);
        if ($query != '' || $this->validator->call('validate', $query)) {
            $this->setRequestAction($pathPattern);
            return $this->post($url);
        }

        return false;
    }
}
