<?php

namespace denbora\R_T_G_Services\services\REST;

class JackpotService extends RestService
{
    /**
     * First part in url after /api/
     */
    const APIURL = 'jackpots';

    /**
     * @param string $query
     * @return mixed
     */
    public function getJeckpots($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::APIURL, '', ''));
        }
    }
}
