<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\Httpful\Response;

class RestResponse implements ResponseInterface
{
    const HTTP_SUCCESSFUL_OPERATION = [200, 201, 204];

    /**
     * array with RTG error codes and messages
     *
     * @var array
     */
    private $codeList;
    private $codeListV2;

    public $requestAction = null;

    public function __construct()
    {
        $this->codeList = json_decode(file_get_contents(__DIR__ . '/../config/codes.json', true), true);
        $this->codeListV2 = json_decode(file_get_contents(__DIR__ . '/../config/codes_v2.json', true), true);
    }

    /**
     * @param Response $response
     * @return array|object|string
     * @throws R_T_G_ServiceException
     */
    public function getContent(Response $response)
    {
        if (!in_array($response->code, self::HTTP_SUCCESSFUL_OPERATION)) {
            if ($response->code != 500) {
                $message = $this->getError($response);
            } else {
                $message = 'Error in request execution. Please contact Support.';
            }

            throw new R_T_G_ServiceException('RTG Message - ' . $message, $response->code);
        }

        return $response->body;
    }

    /**
     * get error from codeList using code
     *
     * @param Response $response
     * @return mixed
     */
    private function getError(Response $response)
    {
        $code = $response->code;
        $uri  = $response->request->uri;
        $method = $response->request->method;

        if (!empty($this->requestAction)) {
            return $this->getErrorMessage(strtoupper($method) . ' ' . $this->requestAction, $code);
        }

        $pattern = "/api/";
        $data = explode($pattern, $uri);
        $category = explode('/', $data[1]);
        $categoryName = $category[0];

        $action = explode('?', end($category))[0];
        if ($action == '' || $action == $categoryName) {
            $action = 'index';
        }

        $actions = $this->codeList[$categoryName][$action];

        return $actions[$code] ?? $actions[$method][$code];
    }

    private function getErrorMessage(string $action, int $code): string
    {
        return $this->codeListV2[$action][$code];
    }
}
