<?php

namespace denbora\R_T_G_Services\services\REST;

class ServiceService extends RestService
{
    /**
     * First part in url after /api/
     */
    const APIURL = 'service';

    /**
     * @param $query
     * @param null $array
     * @param string $endpoint
     * @return mixed
     */
    private function callGet($query, $array = null, $endpoint = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::APIURL, $array, $endpoint));
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getTypes($query = '')
    {
        return $this->callGet($query, '', 'types');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getStatuses($query = '')
    {
        return $this->callGet($query, '', 'statuses');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getCategories($query = '')
    {
        return $this->callGet($query, '', 'categories');
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function postComments($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, '', 'comments'),
                $query
            );
        }
    }
}
