<?php

namespace denbora\R_T_G_Services\casino;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\services\ServiceBase;
use denbora\R_T_G_Services\validators\CasinoValidator;
use SoapClient;

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
     * @var /BaseValidator
     */
    private $validator;

    /**
     * @var array
     */
    protected $serviceDescription = [
        'MessageCenter' => [
            'class' => 'denbora\\R_T_G_Services\\services\\MessageCenterService',
            'endpoint' => 'MessageCenter.svc?WSDL',
        ],
        'Player' => [
            'class' => 'denbora\\R_T_G_Services\\services\\PlayerService',
            'endpoint' => 'Player.svc?WSDL',
        ],
    ];

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
        $this->validator = new CasinoValidator();

        // ToDo: create validator generator

        if ($this->validator->call('baseWebServiceUrl', $baseWebServiceUrl)) {
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
     * @param $certFile string
     * @return boolean
     */
    private function validateCertFile($certFile)
    {
        return true;
    }

    /**
     * @param $password string
     * @return boolean
     */
    private function validatePassword($password)
    {
        return true;
    }

    /**
     * @param $serviceName
     *
     * @return bool
     */
    private function validateService($serviceName)
    {
        return true;
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
     * @param string $serviceName
     * @return string
     * @throws R_T_G_ServiceException
     */
    private function createUrl(string $serviceName)
    {
        if (array_key_exists($serviceName, $this->serviceDescription)) {
            return $this->baseWebServiceUrl . '/' . $this->serviceDescription[$serviceName]['endpoint'];
        } else {
            throw new R_T_G_ServiceException('Service ' . $serviceName . ' not found!');
        }
    }

    /**
     * @param String $serviceName
     * @return SoapClient
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
        $endpoint = $this->createEndpoint($this->baseWebServiceUrl);

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
            echo "<h2>Soap Client is not created</h2>";
            echo $e->getMessage();
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
     * @return ServiceBase
     * @throws R_T_G_ServiceException
     */
    public function getService(string $serviceName)
    {
        //step1 validate existance of such service -> no? exception
        if (!$this->validateService($serviceName)) {
            throw new R_T_G_ServiceException('Service ' . $serviceName . ' not found!');
        }

        //step2 create soapclient -> no? exception
        $soapClient = $this->createSoapClient($serviceName);

        //step3 return Service
        if (!empty($this->serviceDescription[$serviceName]['class'])) {
            $serviceClass = $this->serviceDescription[$serviceName]['class'];
        } else {
            $serviceClass =  __NAMESPACE__ . '\\'. 'services' . '\\'. $serviceName . 'Service';
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
        // ToDo: Implement addService() method.
    }
}
