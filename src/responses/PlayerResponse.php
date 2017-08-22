<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class PlayerResponse extends BaseResponse implements ResponseInterface
{
    /**
     * @param $response
     * @return mixed
     */
    public function rawResponse($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayer($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function activatePlayer($response)
    {
        if ($this->hasErrors($response)) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . 'RTG error - ' . $this->getMessage($response));
        } else {
            return true;
        }
    }

    /**
     * @param $response
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function banPlayer($response)
    {
        if ($this->hasErrors($response)) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . 'RTG error - ' . $this->getMessage($response));
        } else {
            return true;
        }
    }

    public function changePasswordWithToken($response)
    {
        return $response;
    }

    public function changePlayerClass($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function createPlayer($response)
    {
        return $this->baseTrim($response);
    }

    public function createPlayerAndToken($response)
    {
        return $response;
    }

    public function deactivatePlayer($response)
    {
        return $response;
    }

    public function deactivateAndLogoutPlayer($response)
    {
        return $response;
    }

    public function forgotPassword($response)
    {
        return $response;
    }

    public function forgotUsername($response)
    {
        return $response;
    }

    public function getAdjustedNetWinbyPID($response)
    {
        return $response;
    }

    public function getNonCashTotalbyPID($response)
    {
        return $response;
    }

    public function getNonCashTotalbyPIDandDate($response)
    {
        return $response;
    }

    public function getPID($response)
    {
        return $response;
    }

    public function getPlayerClass($response)
    {
        return $response;
    }

    public function getPlayers($response)
    {
        return $response;
    }

    public function getPlayersActiveSessions($response)
    {
        return $response;
    }

    public function getPlayersDelta($response)
    {
        return $response;
    }

    public function getPlayerPasscode($response)
    {
        return $response;
    }

    public function resetPassword($response)
    {
        return $response;
    }

    public function unBanPlayer($response)
    {
        return $response;
    }

    public function updatePlayer($response)
    {
        return $response;
    }

    public function validateCredentials($response)
    {
        return $this->hasErrors($response);
    }

    public function getLedgerInformation($response)
    {
        return $response;
    }

    public function getAuditTrailReport($response)
    {
        return $response;
    }

    public function savePlayer($response)
    {
        return $this->baseTrim($response);
    }

    public function logout($response)
    {
        return $response;
    }
}
