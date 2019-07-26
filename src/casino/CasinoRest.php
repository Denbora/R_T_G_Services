<?php

namespace denbora\R_T_G_Services\casino;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\responses\ResponseFactory;
use denbora\R_T_G_Services\services\REST\CasinoService;
use denbora\R_T_G_Services\services\REST\RestServiceInterface;
use denbora\R_T_G_Services\validators\ValidatorFactory;
use denbora\R_T_G_Services\services\REST\AccountService;
use denbora\R_T_G_Services\services\REST\CashierService;
use denbora\R_T_G_Services\services\REST\GameService;
use denbora\R_T_G_Services\services\REST\HistoryService;
use denbora\R_T_G_Services\services\REST\JackpotService;
use denbora\R_T_G_Services\services\REST\PlayerService;
use denbora\R_T_G_Services\services\REST\ReportService;
use denbora\R_T_G_Services\services\REST\ServiceService;
use denbora\R_T_G_Services\services\REST\SettingsService;

/**
 * Class CasinoRest
 * @package denbora\R_T_G_Services\casino
 * @property AccountService account
 * @property CashierService cashier
 * @property GameService game
 * @property HistoryService history
 * @property JackpotService jackpot
 * @property PlayerService player
 * @property ReportService report
 * @property ServiceService service
 * @property SettingsService settings
 * @property CasinoService casino
 */
class CasinoRest implements CasinoInterface
{
    /**
     * @var array
     */
    protected static $restServices = [];

    const DEFAULT_CONNECT_TIMEOUT = 5;

    const DEFAULT_TIMEOUT = 20;

    /**
     * @var int
     */
    protected $connectTimeout;

    /**
     * @var int
     */
    protected $timeout;

    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @var string
     */
    protected $certificateFile;

    /**
     * @var string
     */
    protected $keyFile;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var /BaseValidator
     */
    protected $validator;

    /**
     * @var array
     */
    protected $serviceDescription;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @param string $serviceName
     * @return object
     * @throws R_T_G_ServiceException
     */
    public function __get(string $serviceName)
    {
        $className = ucwords($serviceName) . 'Service';
        $fullClassName = 'denbora\R_T_G_Services\services\REST\\' . $className;

        if (class_exists($fullClassName)) {
            return $this->getService(ucwords($serviceName));
        } else {
            throw new R_T_G_ServiceException('No such service - ' . $serviceName);
        }
    }

    /**
     * CasinoRest constructor.
     * @param string $baseUrl
     * @param string $certificate
     * @param string $key
     * @param string $password
     * @param string $apiKey
     * @throws R_T_G_ServiceException
     */
    public function __construct(
        string $baseUrl,
        string $certificate,
        string $key,
        string $password,
        string $apiKey = ''
    ) {
        $this->apiKey = $apiKey;

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

        $services = json_decode(file_get_contents(__DIR__ . '/../config/services.json', true), true);
        $this->serviceDescription = $services['Rest'];

        $this->resetTimeouts();
    }

    /**
     * @param string $serviceName
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getService(string $serviceName)
    {
        //step1 create validator from config
        $serviceValidatorClass = $this->serviceDescription[$serviceName]['validatorClass'];
        $serviceValidator = ValidatorFactory::build($serviceValidatorClass);

        //step2 create response from config
        $serviceResponseClass = $this->serviceDescription[$serviceName]['responseClass'];
        $serviceResponse = ResponseFactory::build($serviceResponseClass);

        //step3 creating Service
        if (!empty($this->serviceDescription[$serviceName]['class'])) {
            $serviceClass = $this->serviceDescription[$serviceName]['class'];
        } else {
            $serviceClass = 'denbora\R_T_G_Services\services' . '\\' . 'REST' . '\\' . $serviceName . 'Service';
        }

        if (!key_exists($serviceClass, static::$restServices)) {
            /**@var $serviceInstance RestServiceInterface*/
            $serviceInstance = new $serviceClass(
                $this->certificateFile,
                $this->keyFile,
                $this->password,
                $serviceValidator,
                $serviceResponse,
                $this->baseUrl,
                $this->apiKey
            );

            if (!$serviceInstance->hasConnectTimeout()) {
                $serviceInstance->setConnectTimeout($this->connectTimeout);
            }

            if (!$serviceInstance->hasTimeout()) {
                $serviceInstance->setTimeout($this->timeout);
            }

            static::$restServices[$serviceClass] = $serviceInstance;
        }

        return static::$restServices[$serviceClass];
    }

    /**
     * Setting timeout to RTG API
     *
     * @param int $sec
     * @return $this
     */
    public function setTimeout(int $sec)
    {
        $this->timeout = $sec;
        return $this;
    }

    /**
     * Setting connect timeout to RTG API
     *
     * @param int $sec
     * @return $this
     */
    public function setConnectTimeout(int $sec)
    {
        $this->connectTimeout = $sec;
        return $this;
    }

    /**
     * Setting default timeouts
     */
    public function resetTimeouts()
    {
        $this->connectTimeout = self::DEFAULT_CONNECT_TIMEOUT;
        $this->timeout = self::DEFAULT_TIMEOUT;
    }

    /**
     * @param string $serviceName
     * @param string $serviceClass
     * @param string $serviceEndPoint
     * @return bool
     */
    public function addService(string $serviceName, string $serviceClass, string $serviceEndPoint): bool
    {
        // TODO: Implement addService() method.
        return false;
    }
}
