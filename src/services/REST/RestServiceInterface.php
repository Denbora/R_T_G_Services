<?php

namespace denbora\R_T_G_Services\services\REST;

/**
 * Interface RestServiceInterface
 * @package denbora\R_T_G_Services\services\REST
 */
interface RestServiceInterface
{
    /**
     * @param string $url
     * @return mixed
     */
    public function get(string $url);

    /**
     * @param string $url
     * @param string $data
     * @return mixed
     */
    public function post(string $url, $data = '');

    /**
     * @param string $url
     * @param string $data
     * @return mixed
     */
    public function put(string $url, $data = '');

    /**
     * @param string $url
     * @return mixed
     */
    public function delete(string $url);
}
