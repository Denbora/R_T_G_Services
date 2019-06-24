<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class SecurityService extends ServiceBase implements ServiceInterface
{
    /**
     * The CreateToken service is for users that wish improve their security by creating tokens to
     * authenticate players against flash games and RTG’s web cashier.
     *
     * @param string $PID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function createToken(string $PID, bool $rawResponse)
    {
        $data = [
            'PID' => $PID
        ];

        return $this->run($data, $rawResponse, 'createToken', 'CreateToken');
    }

    /**
     * Validates a given token for a specific player.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function validateToken($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'validateToken', 'ValidateToken');
    }

    /**
     * Creates a token for a specific player and a specific application.
     *
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function createTokenByApp($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'createTokenByApp', 'CreateTokenByApp');
    }

    /**
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function validateTokenByApp($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'validateTokenByApp', 'ValidateTokenByApp');
    }

    /**
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function createGameRestrictedTokenByApp($args, bool $rawResponse)
    {
        return $this->run($args, $rawResponse, 'createGameRestrictedTokenByApp', 'CreateGameRestrictedTokenByApp');
    }
}
