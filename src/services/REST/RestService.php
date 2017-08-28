<?php

namespace denbora\R_T_G_Services\services\REST;

use denbora\R_T_G_Services\validators\ValidatorInterface;
use Httpful\Request;

class RestService implements RestServiceInterface
{
    private $certificate;
    private $key;
    private $password;
    private $validator;
    private $baseUrl;

    public function __construct(
        string $certificate,
        string $key,
        string $password,
        ValidatorInterface $validator,
        string $baseUrl
    ) {
        $this->certificate = $certificate;
        $this->key = $key;
        $this->password = $password;
        $this->validator = $validator;
        $this->baseUrl = $baseUrl;
    }

    /**
     * @param string $partUrl
     * @param string $data
     * @return mixed
     * @internal param string $url
     */
    public function get(string $partUrl, $data = '')
    {
        if ($data != '') {
            $url = $this->baseUrl . $partUrl . $data;
        } else {
            $url = $this->baseUrl . $partUrl;
        }
        $response = Request::get($url)
            ->authenticateWithCert($this->certificate, $this->key, $this->password)
            ->send();

        return $response;
    }

    /**
     * @param string $url
     * @param string $data
     * @return mixed
     */
    public function post(string $url, $data = '')
    {
        // TODO: Implement post() method.
    }

    /**
     * @param string $url
     * @param string $data
     * @return mixed
     */
    public function put(string $url, $data = '')
    {
        // TODO: Implement put() method.
    }

    /**
     * @param string $url
     * @param string $data
     * @return mixed
     */
    public function delete(string $url, $data = '')
    {
        // TODO: Implement delete() method.
    }
}
