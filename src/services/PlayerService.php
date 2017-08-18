<?php

namespace denbora\R_T_G_Services\services;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class PlayerService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $serviceMethod string
     * @param $data
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function call(string $serviceMethod, $data)
    {
        if (in_array($serviceMethod, $this->classMethods)) {
            try {
                $service = $this->$serviceMethod($data);

                return $service;
            } catch (\SoapFault $e) {
                throw new R_T_G_ServiceException('Error: ' . $e->getMessage());
            }
        } else {
            throw new R_T_G_ServiceException($serviceMethod .' does not exist');
        }
    }

    /**
     * Activates a given player in the casino.
     *
     * @param array $args
     * @return object
     */
    protected function activatePlayer($args)
    {
        return $this->service('ActivatePlayer', $args);
    }

    /**
     * Bans a given player and prevents him/her from logging into the casino.
     *
     * @param $args
     * @return object
     */
    protected function banPlayer($args)
    {
        return $this->service('BanPlayer', $args);
    }

    /**
     * Changes the current password of a given player using a security token.
     *
     * @param $args
     * @return object
     */
    protected function changePasswordWithToken($args)
    {
        return $this->service('ChangePasswordWithToken', $args);
    }

    /**
     * Changes the PlayerClass associated with a player.
     *
     * @param $args
     * @return object
     */
    protected function changePlayerClass($args)
    {
        return $this->service('ChangePlayerClass', $args);
    }

    /**
     * Creates a new player in the database.
     *
     * @param $args
     * @return object
     */
    protected function createPlayer($args)
    {
        return $this->service('CreatePlayer', $args);
    }

    /**
     * Creates a new player in the database, after the player is created it will also create a new token for the player.
     *
     * @param $args
     * @return object
     */
    protected function createPlayerAndToken($args)
    {
        return $this->service('CreatePlayerAndToken', $args);
    }

    /**
     * Deactivates a given player in the casino.
     *
     * @param $args
     * @return object
     */
    protected function deactivatePlayer($args)
    {
        return $this->service('DeactivatePlayer', $args);
    }

    /**
     * Deactivates a given player in the casino.
     *
     * @param $args
     * @return object
     */
    protected function deactivateAndLogoutPlayer($args)
    {
        return $this->service('DeactivateAndLogoutPlayer', $args);
    }

    /**
     * This method will send the player an email notification with the Security Token to change the password.
     *
     * @param string $PID
     * @return object
     */
    protected function forgotPassword(string $PID)
    {
        return $this->service('ForgotPassword', array('PID' => $PID));
    }

    /**
     * This method will send the player an email notification with the login (username) information corresponding to
     * the provided email.
     *
     * @param string $email
     * @return object
     */
    protected function forgotUsername(string $email)
    {
        return $this->service('ForgotUsername', array('Email' => $email));
    }

    /**
     * Gets the adjusted net win of a player.
     *
     * @param string $PID
     * @return object
     */
    protected function getAdjustedNetWinbyPID(string $PID)
    {
        return $this->service('GetAdjustedNetWinbyPID', array('PID' => $PID));
    }

    /**
     * Gets the non cash total of a player.
     *
     * @param string $PID
     * @return object
     */
    protected function getNonCashTotalbyPID(string $PID)
    {
        return $this->service('GetNonCashTotalbyPID', array('PID' => $PID));
    }

    /**
     * Gets the non cash total of a player for deposits made within a date range
     *
     * @param $args
     * @return object
     */
    protected function getNonCashTotalbyPIDandDate($args)
    {
        return $this->service('GetNonCashTotalbyPIDandDate', $args);
    }

    /**
     * Retrieves the player’s ID based on its login.
     *
     * @param string $login
     * @return object
     */
    protected function getPID(string $login)
    {
        return $this->service('GetPID', array('Login' => $login));
    }

    /**
     * The getPlayer method retrieves all the information of a specific player based on its Player ID (PID).
     *
     * @param string $PID
     * @return object
     */
    protected function getPlayer(string $PID)
    {
        return $this->service('getPlayer', array('PID' => $PID));
    }

    /**
     * This method retrieves the PlayerClass associated with a specific player based on its Player ID (PID).
     *
     * @param string $PID
     * @return object
     */
    protected function getPlayerClass(string $PID)
    {
        return $this->service('GetPlayerClass', array('PID' => $PID));
    }

    /**
     * This method retrieves all players in the casino based on their sign up date.
     *
     * @param array $args
     * @return object
     */
    protected function getPlayers($args)
    {
        return $this->service('getPlayers', $args);
    }

    /**
     * This method retrieves all active/open player sessions
     *
     * @param $args
     * @return object
     */
    protected function getPlayersActiveSessions($args)
    {
        return $this->service('GetPlayersActiveSessions', $args);
    }

    /**
     * This method retrieves all players in the casino based on the date the player information was updated.
     *
     * @param $args
     * @return object
     */
    protected function getPlayersDelta($args)
    {
        return $this->service('GetPlayersDelta', $args);
    }

    /**
     * This method will generate a pass code which is a required parameter to access RTG’s built-in reset password page.
     *
     * @param string $login
     * @return object
     */
    protected function getPlayerPasscode(string $login)
    {
        return $this->service('GetPlayerPasscode', array('Login' => $login));
    }

    /**
     * This method will flag the player’s password as “Expired” forcing him/her to change the password.
     *
     * @param string $PID
     * @return object
     */
    protected function resetPassword(string $PID)
    {
        return $this->service('ResetPassword', array('PID' => $PID));
    }

    /**
     * Removes all bans for the given player.
     *
     * @param string $PID
     * @return object
     */
    protected function unbanPlayer(string $PID)
    {
        return $this->service('UnbanPlayer', array('PID' => $PID));
    }

    /**
     * Updates the details of an existing player in the database.
     *
     * @param array $args
     * @return object
     */
    protected function updatePlayer($args)
    {
        return $this->service('UpdatePlayer', $args);
    }

    /**
     * Validates if the credentials of a given player are valid or not.
     *
     * @param array $args
     * @return object
     */
    protected function validateCredentials($args)
    {
        return $this->service('ValidateCredentials', $args);
    }

    /**
     * Returns Ledger Information related to the player.
     *
     * @param string $PID
     * @return object
     */
    protected function getLedgerInformation(string $PID)
    {
        return $this->service('GetLedgerInformation', array('PID' => $PID));
    }

    /**
     * The GetAuditTrailReport method retrieves the information about Audit Trails for Players Details,
     * Game Settings and Table Limits.
     *
     * @param array $args
     * @return object
     */
    protected function getAuditTrailReport($args)
    {
        return $this->service('GetAuditTrailReport', $args);
    }

    /**
     * This method creates a new player in the database.
     *
     * @param array $args
     * @return object
     */
    protected function savePlayer($args)
    {
        return $this->service('SavePlayer', $args);
    }

    /**
     * Logout a given player in the casino.
     *
     * @param array $args
     * @return object
     */
    protected function logout($args)
    {
        return $this->service('SavePlayer', $args);
    }
}
