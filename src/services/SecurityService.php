<?php

namespace denbora\R_T_G_Services\services;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\responses\PlayerResponse;
use denbora\R_T_G_Services\validators\ValidatorInterface;

class SecurityService extends ServiceBase implements ServiceInterface
{
    /**
     * @var PlayerResponse
     */
    private $response;

    /**
     * SecurityService constructor.
     * @param \SoapClient $soapClient
     * @param ValidatorInterface $validator
     * @param bool $cleanResponse
     */
    public function __construct(\SoapClient $soapClient, ValidatorInterface $validator, bool $cleanResponse)
    {
        parent::__construct($soapClient, $validator, $cleanResponse);
        $this->response = new PlayerResponse();
    }

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
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function createToken(string $PID)
    {
        $result = $this->validator->call('createToken', $PID);

        if ($result) {
            return $this->service('CreateToken', array('PID' => $PID), $this->response);
        } else {
            throw new R_T_G_ServiceException($result);
        }
    }

    /**
     * Validates a given token for a specific player.
     *
     * @param $args
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function validateToken($args)
    {
        $result = $this->validator->call('validateToken', $args);

        if ($result) {
            return $this->service('ValidateToken', $args, $this->response);
        } else {
            throw new R_T_G_ServiceException($result);
        }
    }

    /**
     * Creates a token for a specific player and a specific application.
     *
     * @param $args
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function createTokenByApp($args)
    {
        $result = $this->validator->call('createTokenByApp', $args);

        if ($result) {
            return $this->service('CreateTokenByApp', $args, $this->response);
        } else {
            throw new R_T_G_ServiceException($result);
        }
    }

    /**
     * @param $args
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function validateTokenByApp($args)
    {
        $result = $this->validator->call('validateTokenByApp', $args);

        if ($result) {
            return $this->service('ValidateTokenByApp', $args, $this->response);
        } else {
            throw new R_T_G_ServiceException($result);
        }
    }

    /**
     * @param $args
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function createGameRestrictedTokenByApp($args)
    {
        $result = $this->validator->call('createGameRestrictedTokenByApp', $args);

        if ($result) {
            return $this->service('CreateGameRestrictedTokenByApp', $args, $this->response);
        } else {
            throw new R_T_G_ServiceException($result);
        }
    }
}
