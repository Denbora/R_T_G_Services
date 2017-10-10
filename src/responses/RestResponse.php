<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class RestResponse implements ResponseInterface
{
    /**
     * array with RTG error codes and messages
     *
     * @var array
     */
    private $codeList;

    /**
     * Requested method
     *
     * @var string
     */
    private $method;

    public function __construct()
    {
        $this->codeList = json_decode(file_get_contents(__DIR__ . '/../config/codes.json', true), true);
    }

    /**
     * get error from codeList using code
     *
     * @param string $code
     * @param string $uri
     * @return string
     */
    private function getError($code, $uri)
    {
        $pattern = "/api/";
        $data = explode($pattern, $uri);
        $category = explode('/', $data[1]);
        $categoryName = $category[0];

        $action = explode('?', end($category))[0];
        if ($action == '') {
            $action = 'index';
        }

        $message = $this->codeList[$categoryName][$action][$code];

        if (is_null($message)) {
            $message = $this->codeList[$categoryName][$action][$this->method][$code];
        }
        return $message;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getContent($response)
    {
        if ($response->code != 200 && $response->code != 201) {
            if ($response->code != 500) {
                $this->method = $response->request->method;
                $message = $this->getError($response->code, $response->request->uri);
            } else {
                $message = 'Error in request execution. Please contact Support.';
            }
            throw new R_T_G_ServiceException('RTG Messaage - ' . $message);
        } else {
            return $response->body;
        }
    }
}
