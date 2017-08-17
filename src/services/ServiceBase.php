<?php

namespace denbora\R_T_G_Services\services;

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
     * ServiceBase constructor.
     * @param \SoapClient $soapClient
     * @param ValidatorInterface $validator
     */
    public function __construct(\SoapClient $soapClient, ValidatorInterface $validator)
    {
        $this->soapClient = $soapClient;
        $this->validator = $validator;
    }
}
