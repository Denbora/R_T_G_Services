<?php

namespace denbora\R_T_G_Services\services\REST;

/**
 * Interface RestServiceInterface
 * @package denbora\R_T_G_Services\services\REST
 */
interface RestServiceInterface
{
    /**
     * @param int $sec
     * @return mixed
     */
    public function setTimeout(int $sec);

    /**
     * @return bool
     */
    public function hasTimeout(): bool;

    /**
     * @param int $sec
     * @return mixed
     */
    public function setConnectTimeout(int $sec);

    /**
     * @return bool
     */
    public function hasConnectTimeout(): bool;

    /**
     * @return mixed
     */
    public function resetTimeouts();

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
