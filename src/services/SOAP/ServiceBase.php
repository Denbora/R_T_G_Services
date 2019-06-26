<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\responses\SoapResponseInterface;
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
     * @var SoapResponseInterface
     */
    protected $response;

    /**
     * ServiceBase constructor.
     * @param \SoapClient $soapClient
     * @param ValidatorInterface $validator
     * @param SoapResponseInterface $response
     */
    public function __construct(\SoapClient $soapClient, ValidatorInterface $validator, SoapResponseInterface $response)
    {
        $this->soapClient = $soapClient;
        $this->validator = $validator;
        $this->response = $response;
        $this->classMethods = get_class_methods(get_class($this));
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @param $validatorName
     * @param $service
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function run($data, bool $rawResponse, $validatorName, $service)
    {
        $result = $this->validator->call($validatorName, $data);

        if ($result) {
            return $this->service($service, $data, $rawResponse);
        }

        throw new R_T_G_ServiceException($result);
    }

    /**
     * @param string $serviceMethod
     * @param $data
     * @param bool $rawResponse
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function call(string $serviceMethod, $data, bool $rawResponse = false)
    {
        if (in_array($serviceMethod, $this->classMethods)) {
            $serviceResponse = $this->$serviceMethod($data, $rawResponse);
            return $serviceResponse;
        }

        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
        throw new R_T_G_ServiceException($errorPrefix . $serviceMethod . ' does not exist');
    }

    /**
     * @param string $method
     * @param $data
     * @param $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function service(string $method, $data, $rawResponse)
    {
        try {
            $callResult = $this->soapClient->__soapCall($method, array($data));

            $responseMethod = lcfirst($method);
            if ($rawResponse === true) {
                $result = $this->response->rawResponse($callResult);
            } else {
                $result = $this->response->$responseMethod($callResult);
            }

            return $result;
        } catch (\Exception $e) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
        }
    }
}
