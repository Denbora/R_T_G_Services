<?php

namespace denbora\R_T_G_Services\services;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\validators\ValidatorInterface;

/**
 * Class ServiceBase
 * @package denbora\R_T_G_Services\services
 */
abstract class ServiceBase
{
    /**
     * @var \SoapClient
     */
    protected $soapClient;

    /**
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * @var array
     */
    protected $classMethods;

    /**
     * ServiceBase constructor.
     * @param \SoapClient $soapClient
     * @param ValidatorInterface $validator
     */
    public function __construct(\SoapClient $soapClient, ValidatorInterface $validator)
    {
        $this->soapClient = $soapClient;
        $this->validator = $validator;
        $this->classMethods = get_class_methods(get_class($this));
    }

    /**
     * gets only requested params, ignoring parents
     *
     * @param $response
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function trimResponse($response)
    {
        if (is_object($response)) {
            $key = key($response);
            return $response->$key->Data;
        } else {
            throw new R_T_G_ServiceException('response has wrong type - ' . gettype($response));
        }
    }

    /**
     * @param string $method
     * @param $data
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function service(string $method, $data)
    {
        try {
            $callResult = $this->soapClient->__soapCall($method, array($data));

            $result = $this->trimResponse($callResult);

            return $result;
        } catch (\Exception $e) {
            throw new R_T_G_ServiceException('Error: ' . $e->getMessage());
        }
    }
}
