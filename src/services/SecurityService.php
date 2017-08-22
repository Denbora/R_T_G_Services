<?php

namespace denbora\R_T_G_Services\services;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class SecurityService extends ServiceBase implements ServiceInterface
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
        $result = $this->validator->call('createToken', $PID);

        if ($result) {
            return $this->service('CreateToken', array('PID' => $PID), $rawResponse);
        } else {
            throw new R_T_G_ServiceException($result);
        }
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
        $result = $this->validator->call('validateToken', $args);

        if ($result) {
            return $this->service('ValidateToken', $args, $rawResponse);
        } else {
            throw new R_T_G_ServiceException($result);
        }
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
        $result = $this->validator->call('createTokenByApp', $args);

        if ($result) {
            return $this->service('CreateTokenByApp', $args, $rawResponse);
        } else {
            throw new R_T_G_ServiceException($result);
        }
    }

    /**
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function validateTokenByApp($args, bool $rawResponse)
    {
        $result = $this->validator->call('validateTokenByApp', $args);

        if ($result) {
            return $this->service('ValidateTokenByApp', $args, $rawResponse);
        } else {
            throw new R_T_G_ServiceException($result);
        }
    }

    /**
     * @param $args
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function createGameRestrictedTokenByApp($args, bool $rawResponse)
    {
        $result = $this->validator->call('createGameRestrictedTokenByApp', $args);

        if ($result) {
            return $this->service('CreateGameRestrictedTokenByApp', $args, $rawResponse);
        } else {
            throw new R_T_G_ServiceException($result);
        }
    }
}
