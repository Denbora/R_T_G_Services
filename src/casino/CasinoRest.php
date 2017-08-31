<?php

namespace denbora\R_T_G_Services\casino;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\responses\ResponseFactory;
use denbora\R_T_G_Services\validators\ValidatorFactory;

class CasinoRest implements CasinoInterface
{
    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var string
     */
    private $certificateFile;

    /**
     * @var string
     */
    private $keyFile;

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
     * @param string $name
     * @return object
     * @throws R_T_G_ServiceException
     */
    public function __get($name)
    {
        $className = ucwords($name) . 'Service';
        $fullClassName = 'denbora\R_T_G_Services\services\REST\\' . $className;

        if (class_exists($fullClassName)) {
            return $this->getService(ucwords($name));
        } else {
            throw new R_T_G_ServiceException('No such service - ' . $name);
        }
    }

    /**
     * CasinoRest constructor.
     * @param string $baseUrl
     * @param string $certificate
     * @param string $key
     * @param string $password
     * @throws R_T_G_ServiceException
     */
    public function __construct(string $baseUrl, string $certificate, string $key, string $password)
    {
        $this->validator = ValidatorFactory::build('CasinoValidator');

        if ($this->validator->call('baseWebServiceUrl', $baseUrl)) {
            $this->baseUrl = $baseUrl;
        } else {
            throw new R_T_G_ServiceException('Base URL does not meet requirements');
        }

        if ($this->validator->call('certFile', $certificate)) {
            $this->certificateFile = $certificate;
        } else {
            throw new R_T_G_ServiceException('Certificate does not meet requirements or not found');
        }

        if ($this->validator->call('certFile', $key)) {
            $this->keyFile = $key;
        } else {
            throw new R_T_G_ServiceException('Key does not meet requirements or not found');
        }

        if ($this->validator->call('password', $password)) {
            $this->password = $password;
        } else {
            throw new R_T_G_ServiceException('Password does not meet requirements');
        }
        $this->serviceDescription = json_decode(
            file_get_contents(__DIR__ . '/../config/services.json', true),
            true
        )['Rest'];
    }

    /**
     * @param $serviceName string
     * @return mixed
     */
    public function getService(string $serviceName)
    {
        $nameInConfig = str_replace("Service", "", $serviceName);
        //step1 create validator from config
        $serviceValidatorClass = $this->serviceDescription[$nameInConfig]['validatorClass'];
        $serviceValidator = ValidatorFactory::build($serviceValidatorClass);

        //step2 create response from config
        $serviceResponseClass = $this->serviceDescription[$nameInConfig]['responseClass'];
        $serviceResponse = ResponseFactory::build($serviceResponseClass);

        //step3 creating Service
        if (!empty($this->serviceDescription[$serviceName]['class'])) {
            $serviceClass = $this->serviceDescription[$serviceName]['class'];
        } else {
            $serviceClass =  'denbora\R_T_G_Services\services' . '\\'. 'REST' . '\\'. $serviceName . 'Service';
        }

        $service = new $serviceClass(
            $this->certificateFile,
            $this->keyFile,
            $this->password,
            $serviceValidator,
            $serviceResponse,
            $this->baseUrl
        );

        return $service;
    }

    /**
     * @param $serviceName string
     * @param $serviceClass string
     * @param $serviceEndPoint string
     * @return boolean
     */
    public function addService($serviceName, $serviceClass, $serviceEndPoint)
    {
        // TODO: Implement addService() method.
    }
}
