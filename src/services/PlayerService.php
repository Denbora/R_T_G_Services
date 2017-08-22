<?php

namespace denbora\R_T_G_Services\services;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class PlayerService extends ServiceBase implements ServiceInterface
{
    /**
     * @param $serviceMethod string
     * @param $data
     * @param bool $rawResponse
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function call(string $serviceMethod, $data, bool $rawResponse = false)
    {
        if (in_array($serviceMethod, $this->classMethods)) {
            try {
                $serviceResponse = $this->$serviceMethod($data, $rawResponse);

                return $serviceResponse;
            } catch (\SoapFault $e) {
                $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
                throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
            }
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $serviceMethod .' does not exist');
        }
    }

    /**
     * Activates a given player in the casino.
     *
     * @param array $args
     * @param bool $rawResponse
     * @return object
     */
    protected function activatePlayer($args, bool $rawResponse)
    {
        $this->validator->call('activatePlayer', $args);

        return $this->service('ActivatePlayer', $args, $rawResponse);
    }

    /**
     * Bans a given player and prevents him/her from logging into the casino.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     */
    protected function banPlayer($args, bool $rawResponse)
    {
        return $this->service('BanPlayer', $args, $rawResponse);
    }

    /**
     * Changes the current password of a given player using a security token.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     */
    protected function changePasswordWithToken($args, bool $rawResponse)
    {
        return $this->service('ChangePasswordWithToken', $args, $rawResponse);
    }

    /**
     * Changes the PlayerClass associated with a player.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     */
    protected function changePlayerClass($args, bool $rawResponse)
    {
        return $this->service('ChangePlayerClass', $args, $rawResponse);
    }

    /**
     * Creates a new player in the database.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function createPlayer($args, bool $rawResponse)
    {
        $result = $this->validator->call('createPlayer', $args);

        if ($result) {
            return $this->service('CreatePlayer', $args, $rawResponse);
        } else {
            throw new R_T_G_ServiceException($result);
        }
    }

    /**
     * Creates a new player in the database, after the player is created it will also create a new token for the player.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     */
    protected function createPlayerAndToken($args, bool $rawResponse)
    {
        return $this->service('CreatePlayerAndToken', $args, $rawResponse);
    }

    /**
     * Deactivates a given player in the casino.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     */
    protected function deactivatePlayer($args, bool $rawResponse)
    {
        return $this->service('DeactivatePlayer', $args, $rawResponse);
    }

    /**
     * Deactivates a given player in the casino.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     */
    protected function deactivateAndLogoutPlayer($args, bool $rawResponse)
    {
        return $this->service('DeactivateAndLogoutPlayer', $args, $rawResponse);
    }

    /**
     * This method will send the player an email notification with the Security Token to change the password.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     */
    protected function forgotPassword(string $PID, bool $rawResponse)
    {
        return $this->service('ForgotPassword', array('PID' => $PID), $rawResponse);
    }

    /**
     * This method will send the player an email notification with the login (username) information corresponding to
     * the provided email.
     *
     * @param string $email
     * @param bool $rawResponse
     * @return object
     */
    protected function forgotUsername(string $email, bool $rawResponse)
    {
        return $this->service('ForgotUsername', array('Email' => $email), $rawResponse);
    }

    /**
     * Gets the adjusted net win of a player.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     */
    protected function getAdjustedNetWinbyPID(string $PID, bool $rawResponse)
    {
        return $this->service('GetAdjustedNetWinbyPID', array('PID' => $PID), $rawResponse);
    }

    /**
     * Gets the non cash total of a player.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     */
    protected function getNonCashTotalbyPID(string $PID, bool $rawResponse)
    {
        return $this->service('GetNonCashTotalbyPID', array('PID' => $PID), $rawResponse);
    }

    /**
     * Gets the non cash total of a player for deposits made within a date range
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     */
    protected function getNonCashTotalbyPIDandDate($args, bool $rawResponse)
    {
        return $this->service('GetNonCashTotalbyPIDandDate', $args, $rawResponse);
    }

    /**
     * Retrieves the player’s ID based on its login.
     *
     * @param string $login
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPID(string $login, bool $rawResponse)
    {
        $result = $this->validator->call('getPID', $login);

        if ($result) {
            return $this->service('GetPID', array('Login' => $login), $rawResponse);
        } else {
            throw new R_T_G_ServiceException($result);
        }
    }

    /**
     * The getPlayer method retrieves all the information of a specific player based on its Player ID (PID).
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayer(string $PID, bool $rawResponse)
    {
        $this->validator->call('getPlayer', $PID);

        return $this->service('GetPlayer', array('PID' => $PID), $rawResponse);
    }

    /**
     * This method retrieves the PlayerClass associated with a specific player based on its Player ID (PID).
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerClass(string $PID, bool $rawResponse)
    {
        return $this->service('GetPlayerClass', array('PID' => $PID), $rawResponse);
    }

    /**
     * This method retrieves all players in the casino based on their sign up date.
     *
     * @param array $args
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayers($args, bool $rawResponse)
    {
        return $this->service('getPlayers', $args, $rawResponse);
    }

    /**
     * This method retrieves all active/open player sessions
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayersActiveSessions($args, bool $rawResponse)
    {
        return $this->service('GetPlayersActiveSessions', $args, $rawResponse);
    }

    /**
     * This method retrieves all players in the casino based on the date the player information was updated.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayersDelta($args, bool $rawResponse)
    {
        return $this->service('GetPlayersDelta', $args, $rawResponse);
    }

    /**
     * This method will generate a pass code which is a required parameter to access RTG’s built-in reset password page.
     *
     * @param string $login
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerPasscode(string $login, bool $rawResponse)
    {
        return $this->service('GetPlayerPasscode', array('Login' => $login), $rawResponse);
    }

    /**
     * This method will flag the player’s password as “Expired” forcing him/her to change the password.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     */
    protected function resetPassword(string $PID, bool $rawResponse)
    {
        return $this->service('ResetPassword', array('PID' => $PID), $rawResponse);
    }

    /**
     * Removes all bans for the given player.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     */
    protected function unBanPlayer(string $PID, bool $rawResponse)
    {
        return $this->service('UnBanPlayer', array('PID' => $PID), $rawResponse);
    }

    /**
     * Updates the details of an existing player in the database.
     *
     * @param array $args
     * @param bool $rawResponse
     * @return object
     */
    protected function updatePlayer($args, bool $rawResponse)
    {
        return $this->service('UpdatePlayer', $args, $rawResponse);
    }

    /**
     * Validates if the credentials of a given player are valid or not.
     *
     * @param array $args
     * @param bool $rawResponse
     * @return object
     */
    protected function validateCredentials($args, bool $rawResponse)
    {
        return $this->service('ValidateCredentials', $args, $rawResponse);
    }

    /**
     * Returns Ledger Information related to the player.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     */
    protected function getLedgerInformation(string $PID, bool $rawResponse)
    {
        return $this->service('GetLedgerInformation', array('PID' => $PID), $rawResponse);
    }

    /**
     * The GetAuditTrailReport method retrieves the information about Audit Trails for Players Details,
     * Game Settings and Table Limits.
     *
     * @param array $args
     * @param bool $rawResponse
     * @return object
     */
    protected function getAuditTrailReport($args, bool $rawResponse)
    {
        return $this->service('GetAuditTrailReport', $args, $rawResponse);
    }

    /**
     * This method creates a new player in the database.
     *
     * @param array $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function savePlayer($args, bool $rawResponse)
    {
        $result = $this->validator->call('savePlayer', $args);

        if ($result) {
            return $this->service('SavePlayer', $args, $rawResponse);
        } else {
            throw new R_T_G_ServiceException($result);
        }
    }

    /**
     * Logout a given player in the casino.
     *
     * @param array $args
     * @param bool $rawResponse
     * @return object
     */
    protected function logout($args, bool $rawResponse)
    {
        return $this->service('SavePlayer', $args, $rawResponse);
    }
}
