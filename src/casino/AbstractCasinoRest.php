<?php

namespace denbora\R_T_G_Services\casino;

use denbora\R_T_G_Services\validators\ValidatorFactory;
use denbora\R_T_G_Services\R_T_G_ServiceException;

abstract class AbstractCasinoRest implements CasinoRestInterface
{
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

    protected $curlOptions;

    protected $options;

    /**
     * AbstractCasinoRest constructor.
     * @param string $baseUrl
     * @param string $certificate
     * @param string $key
     * @param string $password
     * @param string $apiKey
     * @param array $options
     * @throws R_T_G_ServiceException
     */
    public function __construct(
        string $baseUrl,
        string $certificate,
        string $key,
        string $password,
        string $apiKey = '',
        array $options = []
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

        $this->options = $options;

        if (!empty($options['curl']) && is_array($options['curl'])) {
            $this->curlOptions = $options['curl'];
        }
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
}
