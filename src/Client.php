<?php
/**
 * Created by PhpStorm.
 * User: denbora
 * Date: 11.08.17
 * Time: 18:21
 */

namespace denbora\R_T_G_Services;

use SoapClient;

class Client
{

    /**
     * @var SoapClient
     */
    protected $soapClient;

    public function __construct(SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * @return SoapClient
     */
    public function getSoapClient(): SoapClient
    {
        return $this->soapClient;
    }

}
