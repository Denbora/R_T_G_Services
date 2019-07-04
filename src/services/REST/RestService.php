<?php

namespace denbora\R_T_G_Services\services\REST;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\responses\RestResponse;
use denbora\R_T_G_Services\validators\ValidatorInterface;
use Httpful\Request;
use \Exception;

abstract class RestService implements RestServiceInterface
{
    private $certificate;
    private $key;
    private $password;
    protected $validator;
    private $response;
    protected $baseUrl;

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
     * @param string $data
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function get(string $url, $data = '')
    {
        try {
            $response = Request::get($url)
                ->authenticateWithCert($this->certificate, $this->key, $this->password)
                ->send();

            var_dump($response->raw_body);die();

            $result = $this->response->getContent($response);

            return $result;
        } catch (Exception $e) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
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
            $response = Request::post($url)
                ->authenticateWithCert($this->certificate, $this->key, $this->password)
                ->sendsJSON()
                ->body($data)
                ->send();

            $result = $this->response->getContent($response);

            return $result;
        } catch (Exception $e) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
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
            $response = Request::put($url)
                ->authenticateWithCert($this->certificate, $this->key, $this->password)
                ->sendsJSON()
                ->body($data)
                ->send();

            $result = $this->response->getContent($response);

            return $result;
        } catch (Exception $e) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
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
            $response = Request::delete($url)
                ->authenticateWithCert($this->certificate, $this->key, $this->password)
                ->contentType('json')
                ->body($data)
                ->send();

            $result = $this->response->getContent($response);

            return $result;
        } catch (Exception $e) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
        }
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
