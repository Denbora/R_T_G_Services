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
     * @param $errorMessage
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    private function getStringOrError($response, $errorMessage)
    {
        $key = key($response);
        if ($response->$key->Message) {
            return $response->$key->Data->string;
        } else {
            $errorPrefix = $errorMessage . ' - ';
            throw new R_T_G_ServiceException($errorPrefix .
                'RTG ErrorCode - ' . $response->$key->ErrorCode . '; ' .
                'Message - ' . $response->$key->Message);
        }
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
        return $this->validate($response, 'Activate Player Error');
    }

    /**
     * @param $response
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function banPlayer($response)
    {
        return $this->validate($response, 'Ban Player Error');
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
        return $this->getStringOrError($response, 'Get PID Error');
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

    /**
     * @param $response
     * @return bool
     */
    public function validateCredentials($response)
    {
        return $this->validate($response, 'Validate Credentials Error');
    }

    public function getLedgerInformation($response)
    {
        return $response;
    }

    public function getAuditTrailReport($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function savePlayer($response)
    {
        return $this->getStringOrError($response, 'Save Player Error');
    }

    public function logout($response)
    {
        return $response;
    }
}
