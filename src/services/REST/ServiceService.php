<?php

namespace denbora\R_T_G_Services\services\REST;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class ServiceService extends RestService
{
    /**
     * First part in url after /api/
     */
    const API_URL = 'service';

    /**
     * @param $query
     * @param null $array
     * @param string $endpoint
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    private function callGet($query, $array = null, $endpoint = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::API_URL, $array, $endpoint));
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getTypes($query = '')
    {
        return $this->callGet($query, '', 'types');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getStatuses($query = '')
    {
        return $this->callGet($query, '', 'statuses');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getCategories($query = '')
    {
        return $this->callGet($query, '', 'categories');
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postComments($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'comments'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postDownloadId($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'download-id'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getDownloads($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->callGet($query, '', 'downloads');
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getCurrencies($query = '')
    {
        if ($query == '') {
            return $this->callGet($query, '', 'currencies');
        }
        return false;
    }
}
