<?php

namespace denbora\R_T_G_Services\helpers;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class UrlHelper
{
    /**
     * @param string        $baseUrl
     * @param string        $pathPattern
     *                      @example api/player/{playerId}/token/{playerToken} parameter will be taken from query
     * @param array        $query
     * @param bool|array    $queryParameters
     *                      true - use all options for queries
     *                      false - вo not use the GET parameters
     *                      array - the list of keys to be used for the query
     *
     * @return array
     * @throws R_T_G_ServiceException
     */
    public static function createFullUrl(
        string $baseUrl,
        string $pathPattern,
        array $query,
        $queryParameters = false
    ) {
        $url = $baseUrl;

        foreach ($query as $key => $value) {
            $urlParameter = '{' . $key . '}';

            if (strripos($pathPattern, $urlParameter) !== false) {
                $path = str_replace($urlParameter, $value, $pathPattern);
                unset($query[$key]);
            }
        }

        $url .= $path ?? $pathPattern;

        if ($queryParameters !== false) {
            $urlParameters = $query;

            if (is_array($queryParameters)) {
                $urlParameters = array_filter($query, function ($key) use ($queryParameters) {
                    if (in_array($key, $queryParameters)) {
                        unset($queryParameters[$key]);
                        return true;
                    }
                    return false;
                }, ARRAY_FILTER_USE_KEY);
            }

            $url .= self::createUrlParameters($urlParameters ?? []);
        }

        return [$url, $query];
    }

    /**
     * @param array $query
     * @return string
     * @throws R_T_G_ServiceException
     */
    protected static function createUrlParameters(array $query): string
    {
        if (!empty($query)) {
            return '?' . self::httpBuildQuery($query);
        }

        return '';
    }

    private static function queryToUrlencode(array $query): array
    {
        foreach ($query as $key => $value) {
            if (is_array($value)) {
                $query[$key] = self::queryToUrlencode($value);
            } elseif (is_bool($value)) {
                $query[$key] = $value === true ? 'true' : 'false';
            } else {
                $query[$key] = urlencode($value);
            }
        }
        return $query;
    }

    /**
     * @param array $query
     * @return string
     * @throws R_T_G_ServiceException
     */
    private static function httpBuildQuery(array $query): string
    {
        $result = '';
        foreach (self::queryToUrlencode($query) as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $item) {
                    if (is_array($item)) {
                        throw new R_T_G_ServiceException('Error query data');
                    }
                    $result .= '&' . $key . '=' . $item;
                }
            } else {
                $result .= '&' . $key . '=' . $value;
            }
        }

        return trim($result, '&');
    }
}
