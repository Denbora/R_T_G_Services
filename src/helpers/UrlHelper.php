<?php

namespace denbora\R_T_G_Services\helpers;

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

    protected static function createUrlParameters(array $query): string
    {
        if (!empty($query)) {
            return '?' . http_build_query(
                array_map(function ($value) {
                    return urlencode($value);
                }, $query)
            );
        }

        return '';
    }
}
