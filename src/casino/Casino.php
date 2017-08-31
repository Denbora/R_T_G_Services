<?php

namespace denbora\R_T_G_Services\casino;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\responses\ResponseFactory;
use denbora\R_T_G_Services\services\SOAP\ServiceInterface;
use denbora\R_T_G_Services\validators\ValidatorFactory;
use SoapClient;

/**
 * Class Casino
 * @package denbora\R_T_G_Services\casino
 */
class Casino implements CasinoInterface
{
    /**
     * @var array of 'serviceName' => serviceInstance
     */
    private $serviceInstances = [];

    /**
     * @var string
     */
    private $baseWebServiceUrl;

    /**
     * @var string
     */
    private $certFile;

    /**
     * @var string
     */
    private $password;

    /**
     * @var /BaseValidator
     */
    private $validator;

    /**
     * @var array
     */
    protected $serviceDescription;

    /**
     * Casino constructor.
     *
     * @param $baseWebServiceUrl string
     * @param $certFile string
     * @param $password string
     * @throws R_T_G_ServiceException
     *
     */
    public function __construct(string $baseWebServiceUrl, string $certFile, string $password)
    {
        $this->validator = ValidatorFactory::build('CasinoValidator');

        if ($this->validator->call('baseWebServiceUrl', $baseWebServiceUrl)) {
            $this->baseWebServiceUrl = $baseWebServiceUrl;
        } else {
            throw new R_T_G_ServiceException('Base URL does not meet requirements');
        }
        if ($this->validator->call('certFile', $certFile)) {
            $this->certFile = $certFile;
        } else {
            throw new R_T_G_ServiceException('Certificate does not meet requirements or not found');
        }
        if ($this->validator->call('password', $password)) {
            $this->password = $password;
        } else {
            throw new R_T_G_ServiceException('Password does not meet requirements');
        }

        $this->serviceDescription = json_decode(file_get_contents(__DIR__ . '/../config/services.json', true), true);
    }

    /**
     * Delete wsdl from webUrl, to create endpoint
     *
     * @param string $webServiceUrl
     * @return string
     */
    private function createEndpoint(string $webServiceUrl) : string
    {
        $search = array('?wsdl', '?WSDL');

        $endpoint = str_replace($search, "", $webServiceUrl);

        return $endpoint;
    }

    /**
     * Connects two parts $baseUrl and service endpoint, to create full url
     *
     * @param string $serviceName
     * @return string
     * @throws R_T_G_ServiceException
     */
    private function createUrl(string $serviceName)
    {
        if (array_key_exists($serviceName, $this->serviceDescription)) {
            return $this->baseWebServiceUrl . '/' . $this->serviceDescription[$serviceName]['endpoint'];
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . 'Service ' . $serviceName . ' not found!');
        }
    }

    /**
     * @param String $serviceName
     * @return SoapClient
     * @throws R_T_G_ServiceException
     */
    protected function createSoapClient(String $serviceName)
    {
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ]);

        $webUrl = $this->createUrl($serviceName);
        $endpoint = $this->createEndpoint($webUrl);

        $soapclient_options = array(
            'stream_context' => $context,
            'location'       => $endpoint,
            'keep_alive'     => true,
            'trace'          => true,
            'local_cert'     => $this->certFile,
            'passphrase'     => $this->password,
            'exceptions'     => true,
            'cache_wsdl'     => WSDL_CACHE_NONE
        );

        try {
            $soapClient = new SoapClient($webUrl, $soapclient_options);

            return $soapClient;
        } catch (\Exception $e) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . 'Soap Client is not created ' . $e->getMessage());
        }
    }

    /**
     * @return mixed
     */
    public function getBaseWebServiceUrl()
    {
        return $this->baseWebServiceUrl;
    }

    /**
     * @param mixed $baseWebServiceUrl
     */
    public function setBaseWebServiceUrl($baseWebServiceUrl)
    {
        $this->baseWebServiceUrl = $baseWebServiceUrl;
    }

    /**
     * @return mixed
     */
    public function getCertFile()
    {
        return $this->certFile;
    }

    /**
     * @param mixed $certFile
     */
    public function setCertFile($certFile)
    {
        $this->certFile = $certFile;
    }

    /**
     * @param $serviceName string
     * @return ServiceInterface
     * @throws R_T_G_ServiceException
     */
    public function getService(string $serviceName)
    {
        //step0 : return instance of needed service in case it is already created
        if (!empty($this->serviceInstances[$serviceName])) {
            return $this->serviceInstances[$serviceName];
        }

        //step1 validate existence of such service in config -> no? exception
        if (!array_key_exists($serviceName, $this->serviceDescription)) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . 'Service ' . $serviceName . ' not found in config');
        }

        //step2 create validator from config
        $serviceValidatorClass = $this->serviceDescription[$serviceName]['validatorClass'];
        $serviceValidator = ValidatorFactory::build($serviceValidatorClass);

        //step3 create response from config
        $serviceResponseClass = $this->serviceDescription[$serviceName]['responseClass'];
        $serviceResponse = ResponseFactory::build($serviceResponseClass);

        //step3 create soapclient -> no? exception
        $soapClient = $this->createSoapClient($serviceName);

        //step4 creating Service
        if (!empty($this->serviceDescription[$serviceName]['class'])) {
            $serviceClass = $this->serviceDescription[$serviceName]['class'];
        } else {
            $serviceClass =  __NAMESPACE__ . '\\'. 'services' . '\\'. 'SOAP' . '\\'. $serviceName . 'Service';
        }
        $service = new $serviceClass($soapClient, $serviceValidator, $serviceResponse);

        //step5 saving created service and returning it
        $this->serviceInstances[$serviceName] = $service;

        return $service;
    }

    /**
     * @param $serviceName string
     * @param $serviceClass string
     * @param $serviceEndPoint string
     * @return boolean
     * @throws R_T_G_ServiceException
     */
    public function addService($serviceName, $serviceClass, $serviceEndPoint)
    {
        // ToDo: Implement addService() method.
    }
}
