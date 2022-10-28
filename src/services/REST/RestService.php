<?php

namespace denbora\R_T_G_Services\services\REST;

use denbora\R_T_G_Services\casino\AbstractCasinoRest;
use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\responses\RestResponse;
use denbora\R_T_G_Services\validators\ValidatorInterface;
use denbora\R_T_G_Services\Httpful\Request;
use Exception;

abstract class RestService implements RestServiceInterface
{
    private $certificate;
    private $key;
    private $password;
    private $response;

    protected $validator;
    protected $baseUrl;
    protected $apiKey;

    protected $connectTimeout;
    protected $timeout;
    protected $curlOptions;
    protected $options;

    public function __construct(
        string $certificate,
        string $key,
        string $password,
        ValidatorInterface $validator,
        RestResponse $response,
        string $baseUrl,
        string $apiKey,
        $options = []
    ) {
        $this->certificate = $certificate;
        $this->key = $key;
        $this->password = $password;
        $this->validator = $validator;
        $this->response = $response;
        $this->baseUrl = $baseUrl;
        $this->apiKey = $apiKey;
        $this->options = $options;

        if (!empty($options['curl']) && is_array($options['curl'])) {
            $this->curlOptions = $options['curl'];
        }
    }

    public function setTimeout(int $sec)
    {
        $this->timeout = $sec;
        return $this;
    }

    public function hasTimeout(): bool
    {
        return !empty($this->timeout);
    }

    public function setConnectTimeout(int $sec)
    {
        $this->connectTimeout = $sec;
        return $this;
    }

    public function hasConnectTimeout(): bool
    {
        return !empty($this->connectTimeout);
    }

    public function resetTimeouts()
    {
        $this->connectTimeout = AbstractCasinoRest::DEFAULT_CONNECT_TIMEOUT;
        $this->timeout = AbstractCasinoRest::DEFAULT_TIMEOUT;
        return $this;
    }

    /**
     * @param string $url
     * @param string $data
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function get(string $url, $data = '')
    {
        try {
            $request = Request::get($this->optionalUrl($url))
                ->addOnCurlOption(CURLOPT_CONNECTTIMEOUT, $this->connectTimeout)
                ->addOnCurlOption(CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1)
                ->addOnCurlOption(CURLOPT_TIMEOUT, $this->timeout);

            if (empty($this->apiKey)) {
                $request->authenticateWithCert($this->certificate, $this->key, $this->password);
            }

            $response = $request->send();

            $result = $this->response->getContent($response);

            return $result;
        } catch (Exception $exception) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @param string $url
     * @param string $data
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function post(string $url, $data = '')
    {
        try {
            $request =  Request::post($this->optionalUrl($url))
                ->addOnCurlOption(CURLOPT_CONNECTTIMEOUT, $this->connectTimeout)
                ->addOnCurlOption(CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1)
                ->addOnCurlOption(CURLOPT_TIMEOUT, $this->timeout)
                ->contentType('json')
                ->body($data);

            if (empty($this->apiKey)) {
                $request->authenticateWithCert($this->certificate, $this->key, $this->password);
            }

            $response = $request->send();

            $result = $this->response->getContent($response);

            return $result;
        } catch (Exception $exception) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @param string $url
     * @param string $data
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function put(string $url, $data = '')
    {
        try {
            $request = Request::put($this->optionalUrl($url))
                ->addOnCurlOption(CURLOPT_CONNECTTIMEOUT, $this->connectTimeout)
                ->addOnCurlOption(CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1)
                ->addOnCurlOption(CURLOPT_TIMEOUT, $this->timeout)
                ->authenticateWithCert($this->certificate, $this->key, $this->password)
                ->contentType('json')
                ->body($data);

            if (empty($this->apiKey)) {
                $request->authenticateWithCert($this->certificate, $this->key, $this->password);
            }

            $response = $request->send();

            $result = $this->response->getContent($response);

            return $result;
        } catch (Exception $exception) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @param string $url
     * @param string $data
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function delete(string $url, $data = '')
    {
        try {
            $request = Request::delete($this->optionalUrl($url))
                ->addOnCurlOption(CURLOPT_CONNECTTIMEOUT, $this->connectTimeout)
                ->addOnCurlOption(CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1)
                ->addOnCurlOption(CURLOPT_TIMEOUT, $this->timeout)
                ->contentType('json')
                ->body($data);

            if (empty($this->apiKey)) {
                $request->authenticateWithCert($this->certificate, $this->key, $this->password);
            }

            $response = $request->send();

            $result = $this->response->getContent($response);

            return $result;
        } catch (Exception $exception) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @param string $url
     * @param array $query
     * @return string
     */
    protected function optionalUrl(string $url, array $query = [])
    {
        //deleted last '/' from path
        $path = parse_url($url, PHP_URL_PATH);
        if ($path) {
            $url = str_replace($path, rtrim($path, '/'), $url);
        }

        if (!empty($this->apiKey)) {
            $query['apiKey'] = $this->apiKey;
            $url .= (parse_url($url, PHP_URL_QUERY) ? '&' : '?') . http_build_query($query);
        }

        return $url;
    }

    /**
     * @param object $request
     * @return string
     */
    protected function toUrlFormat($request): string
    {
        $urlParameters = [];
        foreach ($request as $key => $value) {
            $urlParameters[$key] = urlencode($value);
        }

        if (!empty($urlParameters)) {
            return '?' . http_build_query($urlParameters);
        }

        return '';
    }

    /**
     * @param string $query
     * @param string $serviceApiUrl
     * @param null $pathParams
     * @param string $endpoint
     * @return string
     */
    protected function createFullUrl(
        string $query,
        string $serviceApiUrl,
        $pathParams = null,
        string $endpoint = ''
    ) {
        if ($query != '') {
            $path = '';
            $queryData = '';
            $url = $this->baseUrl . $serviceApiUrl;
            $queryObject = json_decode($query);

            if (is_array($pathParams)) {
                foreach ($pathParams as $value) {
                    if (property_exists($queryObject, $value)) {
                        $path .= $queryObject->$value . '/';
                        unset($queryObject->$value);
                    }
                }
            }

            if ($path != '') {
                $url .= '/' . $path;
            }

            $url .= $queryData;

            if ($endpoint != '') {
                if (is_null($pathParams) || $pathParams == '') {
                    $url .= '/' . $endpoint;
                } else {
                    $url .= $endpoint;
                }
            }
        } else {
            $url = $this->baseUrl . $serviceApiUrl;

            if ($endpoint != '') {
                $url .= '/' . $endpoint;
            }
        }

        return $url;
    }

    /**
     * @param string $query
     * @param string $serviceApiUrl
     * @param null $pathParams
     * @param string $endpoint
     * @return string
     */
    protected function createGetFullUrl(string $query, string $serviceApiUrl, $pathParams = null, string $endpoint = '')
    {
        if ($query != '') {
            $path = '';
            $url = $this->baseUrl . $serviceApiUrl;
            $queryObject = json_decode($query);

            if (is_array($pathParams)) {
                foreach ($pathParams as $value) {
                    if (property_exists($queryObject, $value)) {
                        $path .= $queryObject->$value . '/';
                        unset($queryObject->$value);
                    }
                }
            }

            if ($path != '') {
                $url .= '/' . $path;
            }

            if (is_null($pathParams) || $pathParams == '') {
                $url .= '/' . $endpoint;
            } else {
                $url .= $endpoint;
            }
            $url .= $this->toUrlFormat($queryObject);
        } else {
            $url = $this->baseUrl . $serviceApiUrl;

            if ($endpoint != '') {
                $url .= '/' . $endpoint;
            }
        }

        return $url;
    }

    /**
     * @param $query
     * @param $remove
     * @return mixed
     */
    protected function removeFromQuery(string $query, $remove)
    {
        $data = json_decode($query);

        foreach ($remove as $value) {
            unset($data->$value);
        }

        return json_encode($data);
    }

    /**
     * Added param to link
     *
     * @param string $query
     * @param array $parameters
     * @param string $url
     * @return string
     */
    protected function addQueryParametersToUrl(string $query, array $parameters, string $url)
    {
        $data = json_decode($query, true);

        $urlQuery = parse_url($url, PHP_URL_QUERY);

        if ($urlQuery) { // If url query not empty - added param to exists params
            $url .= '&';
        } else {
            $url .= '?';
        }

        foreach ($parameters as $parameter) {
            if (isset($data[$parameter])) {
                $url .= $parameter . '=' . (string) $data[$parameter];
            }
        }

        return $url;
    }

    public function removeParametersFromQuery(string $query, array $parameters)
    {
        $data = json_decode($query, true);

        foreach ($parameters as $parameter) {
            if (isset($data[$parameter])) {
                unset($data[$parameter]);
            }
        }

        return json_encode($data);
    }

    /**
     * @param string $action
     */
    protected function setRequestAction(string $action)
    {
        $this->response->requestAction = '/api/' . $action;
    }
}
