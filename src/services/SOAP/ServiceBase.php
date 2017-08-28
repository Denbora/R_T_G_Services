<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\responses\ResponseInterface;
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
     * ResponseInterface @var
     */
    protected $response;

    /**
     * ServiceBase constructor.
     * @param \SoapClient $soapClient
     * @param ValidatorInterface $validator
     * @param ResponseInterface $response
     */
    public function __construct(\SoapClient $soapClient, ValidatorInterface $validator, ResponseInterface $response)
    {
        $this->soapClient = $soapClient;
        $this->validator = $validator;
        $this->response = $response;
        $this->classMethods = get_class_methods(get_class($this));
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
