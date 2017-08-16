<?php

namespace denbora\R_T_G_Services\casino;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\services\ServiceBase;
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
	private $endpoint;

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
            'name' => 'Player',
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
	 * @param string $endpoint
	 *
	 * @throws R_T_G_ServiceException
	 */
    public function __construct(string $baseWebServiceUrl, string $certFile, string $password, string $endpoint)
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
        return true;
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
     * @return \SoapClient
     * @throws R_T_G_ServiceException
     */
    protected function createSoapClient()
    {
	    $context = stream_context_create([
		    'ssl' => [
			    'verify_peer' => false,
			    'verify_peer_name' => false,
			    'allow_self_signed' => true
		    ]
	    ]);

	    $soapclient_options = array(
		    'stream_context' => $context,
		    'location'       => $this->endpoint,
		    'keep_alive'     => true,
		    'trace'          => true,
		    'local_cert'     => $this->certFile,
		    'passphrase'     => $this->password,
		    'exceptions'     => true,
		    'cache_wsdl'     => WSDL_CACHE_NONE
	    );

	    $soapClient = new SoapClient($this->baseWebServiceUrl, $soapclient_options);
		// TODO: validate soapClient somehos
	    return $soapClient;
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
    	if(!$this->validateService($serviceName)) {
		    throw new R_T_G_ServiceException('Service ' . $serviceName . ' not found!');
	    }

        //step2 create soapclient -> no? exception
        $soapClient = $this->createSoapClient();

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

	/**
	 * @return string
	 */
	public function getEndpoint(): string {
		return $this->endpoint;
	}

	/**
	 * @param string $endpoint
	 */
	public function setEndpoint( string $endpoint ) {
		$this->endpoint = $endpoint;
	}

}