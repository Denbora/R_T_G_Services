<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class PlayerService extends ServiceBase implements ServiceInterface
{
    /**
     * Activates a given player in the casino.
     *
     * @param array $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function activatePlayer($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'activatePlayer', 'ActivatePlayer');
    }

    /**
     * Bans a given player and prevents him/her from logging into the casino.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function banPlayer($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'banPlayer', 'BanPlayer');
    }

    /**
     * Changes the current password of a given player using a security token.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function changePasswordWithToken($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'changePasswordWithToken', 'ChangePasswordWithToken');
    }

    /**
     * Changes the PlayerClass associated with a player.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function changePlayerClass($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'changePlayerClass', 'ChangePlayerClass');
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
        return $this->run($args, $rawResponse, 'createPlayer', 'CreatePlayer');
    }

    /**
     * Creates a new player in the database, after the player is created it will also create a new token for the player.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function createPlayerAndToken($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'createPlayerAndToken', 'CreatePlayerAndToken');
    }

    /**
     * Deactivates a given player in the casino.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function deactivatePlayer($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'deactivatePlayer', 'DeactivatePlayer');
    }

    /**
     * Deactivates a given player in the casino.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function deactivateAndLogoutPlayer($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'deactivateAndLogoutPlayer', 'DeactivateAndLogoutPlayer');
    }

    /**
     * This method will send the player an email notification with the Security Token to change the password.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function forgotPassword(string $PID, bool $rawResponse)
    {
        $data = [
            'PID' => $PID
        ];

        return $this->run($data, $rawResponse, 'forgotPassword', 'ForgotPassword');
    }

    /**
     *  This method will send the player an email notification with the login (username) information corresponding to
     * the provided email.
     *
     * @param string $email
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function forgotUsername(string $email, bool $rawResponse)
    {
        $data = [
            'Email' => $email
        ];

        return $this->run($data, $rawResponse, 'forgotUsername', 'ForgotUsername');
    }

    /**
     * Gets the adjusted net win of a player.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getAdjustedNetWinbyPID(string $PID, bool $rawResponse)
    {
        $data = [
            'PID' => $PID
        ];

        return $this->run($data, $rawResponse, 'getAdjustedNetWinbyPID', 'GetAdjustedNetWinbyPID');
    }

    /**
     * Gets the non cash total of a player.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getNonCashTotalbyPID(string $PID, bool $rawResponse)
    {
        $data = [
            'PID' => $PID
        ];

        return $this->run($data, $rawResponse, 'getNonCashTotalbyPID', 'GetNonCashTotalbyPID');
    }

    /**
     * Gets the non cash total of a player for deposits made within a date range
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getNonCashTotalbyPIDandDate($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'getNonCashTotalbyPIDandDate', 'GetNonCashTotalbyPIDandDate');
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
        $data = [
            'Login' => $login
        ];

        return $this->run($data, $rawResponse, 'getPID', 'GetPID');
    }

    /**
     * The getPlayer method retrieves all the information of a specific player based on its Player ID (PID).
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayer(string $PID, bool $rawResponse)
    {
        $data = [
            'PID' => $PID
        ];

        return $this->run($data, $rawResponse, 'getPlayer', 'GetPlayer');
    }

    /**
     * This method retrieves the PlayerClass associated with a specific player based on its Player ID (PID).
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerClass(string $PID, bool $rawResponse)
    {
        $data = [
            'PID' => $PID
        ];

        return $this->run($data, $rawResponse, 'getPlayerClass', 'GetPlayerClass');
    }

    /**
     * This method retrieves all players in the casino based on their sign up date.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayers($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'getPlayers', 'getPlayers');
    }

    /**
     * This method retrieves all active/open player sessions
     *
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayersActiveSessions(bool $rawResponse)
    {
        return $this->run('', $rawResponse, 'getPlayersActiveSessions', 'GetPlayersActiveSessions');
    }

    /**
     * This method retrieves all players in the casino based on the date the player information was updated.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayersDelta($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'getPlayersDelta', 'GetPlayersDelta');
    }

    /**
     * This method will generate a pass code which is a required parameter to access RTG’s built-in reset password page.
     *
     * @param string $login
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayerPasscode(string $login, bool $rawResponse)
    {
        $data = [
            'Login' => $login
        ];

        return $this->run($data, $rawResponse, 'getPlayerPasscode', 'GetPlayerPasscode');
    }

    /**
     * This method will flag the player’s password as “Expired” forcing him/her to change the password.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function resetPassword(string $PID, bool $rawResponse)
    {
        $data = [
            'PID' => $PID
        ];

        return $this->run($data, $rawResponse, 'resetPassword', 'ResetPassword');
    }

    /**
     * Removes all bans for the given player.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function unBanPlayer(string $PID, bool $rawResponse)
    {
        $data = [
            'PID' => $PID
        ];

        return $this->run($data, $rawResponse, 'unBanPlayer', 'UnBanPlayer');
    }

    /**
     * Updates the details of an existing player in the database.
     *
     * @param array $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function updatePlayer($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'updatePlayer', 'UpdatePlayer');
    }

    /**
     * Validates if the credentials of a given player are valid or not.
     *
     * @param array $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function validateCredentials($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'validateCredentials', 'ValidateCredentials');
    }

    /**
     * Returns Ledger Information related to the player.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getLedgerInformation(string $PID, bool $rawResponse)
    {
        $data = [
            'PID' => $PID
        ];

        return $this->run($data, $rawResponse, 'getLedgerInformation', 'GetLedgerInformation');
    }

    /**
     * The GetAuditTrailReport method retrieves the information about Audit Trails for Players Details,
     * Game Settings and Table Limits.
     *
     * @param array $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getAuditTrailReport($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'getAuditTrailReport', 'GetAuditTrailReport');
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
        return $this->run($args, $rawResponse, 'savePlayer', 'SavePlayer');
    }

    /**
     * Logout a given player in the casino.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function logout($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'logout', 'Logout');
    }
}
