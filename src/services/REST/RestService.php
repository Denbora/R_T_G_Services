<?php

namespace denbora\R_T_G_Services\services\REST;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\responses\RestResponse;
use denbora\R_T_G_Services\validators\ValidatorInterface;
use Httpful\Request;

class RestService implements RestServiceInterface
{
    private $certificate;
    private $key;
    private $password;
    private $validator;
    private $response;
    private $baseUrl;

    public function __construct(
        string $certificate,
        string $key,
        string $password,
        ValidatorInterface $validator,
        RestResponse $response,
        string $baseUrl
    ) {
        $this->certificate = $certificate;
        $this->key = $key;
        $this->password = $password;
        $this->validator = $validator;
        $this->response = $response;
        $this->baseUrl = $baseUrl;
    }

    /**
     * @param string $url
     * @param bool $rawResponse
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function get(string $url, bool $rawResponse = false)
    {
        try {
            $response = Request::get($url)
                ->authenticateWithCert($this->certificate, $this->key, $this->password)
                ->send();

            if ($rawResponse === true) {
                $result = $this->response->rawResponse($response);
            } else {
                $result = $this->response->onlyContent($response);
            }

            return $result;
        } catch (\Exception $e) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
        }
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

    /**
     * @param $login
     * @param bool $rawResponse
     * @return \Httpful\Response
     */
    public function getPid($login, bool $rawResponse = false)
    {
        $partUrl = 'accounts/playerid?login=';

        $url = $this->baseUrl . $partUrl . $login;
        $response = $this->get($url, $rawResponse);
        return $response;
    }
}
