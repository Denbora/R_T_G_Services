<?php

namespace denbora\R_T_G_Services\casino;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\services\ServiceBase;

/**
 * Class Casino
 * @package denbora\R_T_G_Services\casino
 */
class Casino implements CasinoInterface
{
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
     * @var array
     */
    protected $serviceDescription = [
        'MessageCenter' => [
            'name' => 'MessageCenter',
            'class' => 'denbora\\R_T_G_Services\\casino\\MessageCenterService',
            'endpoint' => 'MessageCenter.svc?WSDL',
        ],
        'Player' => [
            'name' => 'MessageCenter',
            'class' => 'denbora\\R_T_G_Services\\casino\\PlayerService',
            'endpoint' => 'Player.svc?WSDL',
        ],
    ];

    /**
     * Casino constructor.
     * @param $baseWebServiceUrl string
     * @param $certFile string
     * @param $password string
     * @throws R_T_G_ServiceException
     */
    public function __construct(string $baseWebServiceUrl, string $certFile, string $password)
    {
        if ($this->validateBaseWebServiceUrl($baseWebServiceUrl)) {
            $this->baseWebServiceUrl = $baseWebServiceUrl;
        } else {
            throw new R_T_G_ServiceException('Base URL does not meet requirements');
        }
        if ($this->validateCertFile($certFile)) {
            $this->certFile = $certFile;
        } else {
            throw new R_T_G_ServiceException('Certificate does not meet requirements or not found');
        }
        if ($this->validatePassword($password)) {
            $this->password = $password;
        } else {
            throw new R_T_G_ServiceException('Password does not meet requirements');
        }
    }

    /**
     * @param $baseWebServiceUrl string
     * @return boolean
     */
    private function validateBaseWebServiceUrl($baseWebServiceUrl)
    {
        //ToDo
    }

    /**
     * @param $certFile string
     * @return boolean
     */
    private function validateCertFile($certFile)
    {
        //ToDO
    }

    /**
     * @param $password string
     * @return boolean
     */
    private function validatePassword($password)
    {
        //ToDo
    }

    /**
     * @param $serviceName
     * @return \SoapClient
     * @throws R_T_G_ServiceException
     */
    protected function createSoapClient($serviceName)
    {
        //ToDo
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
     * @return ServiceBase
     * @throws R_T_G_ServiceException
     */
    public function getService(string $serviceName)
    {
        // TODO: Implement getService() method.
        //step1 validate existance of such service -> no? exception

        //step2 create soapclient -> no? exception
        $soapClient = $this->createSoapClient($serviceName);

        //step3 return Service
        if (!empty($this->serviceDescription[$serviceName]['class'])) {
            $serviceClass = $this->serviceDescription[$serviceName]['class'];
        } else {
            $serviceClass =  __NAMESPACE__ . '\\'. $serviceName . 'Service';
        }
        return new $serviceClass($soapClient);
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
        // TODO: Implement addService() method.
    }

}