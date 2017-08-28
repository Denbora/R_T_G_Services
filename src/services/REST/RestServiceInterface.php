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
     * @internal param string $data
     */
    public function get(string $url);

    /**
     * @param string $url
     * @return mixed
     * @internal param string $data
     */
    public function post(string $url);

    /**
     * @param string $url
     * @return mixed
     * @internal param string $data
     */
    public function put(string $url);

    /**
     * @param string $url
     * @return mixed
     * @internal param string $data
     */
    public function delete(string $url);
}
