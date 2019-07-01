<?php

namespace denbora\R_T_G_Services\helpers;

class UrlHelper
{
    /**
     * @param string        $baseUrl
     * @param string        $pathPattern
     *                      @example api/player/{playerId}/token/{playerToken} parameter will be taken from query
     * @param string        $queryJSON
     * @param bool|array    $queryParameters
     *                      true - use all options for queries
     *                      false - вo not use the GET parameters
     *                      array - the list of keys to be used for the query
     *
     * @return string
     */
    public static function createFullUrl(
        string $baseUrl,
        string $pathPattern,
        string $queryJSON,
        $queryParameters = false
    ) {
        $url = $baseUrl;

        $queryArray = !empty($queryJSON) ? json_decode($queryJSON, true) : [];

        foreach ($queryArray as $key => $value) {
            $urlParameter = '{' . $key . '}';

            if (strripos($pathPattern, $urlParameter) !== false) {
                $path = str_replace($urlParameter, $value, $pathPattern);
                unset($queryArray[$key]);
            }
        }

        $url .= $path ?? '';

        if ($queryParameters !== false) {
            $urlParameters = $queryArray;

            if (is_array($queryParameters)) {
                $urlParameters = array_filter($queryArray, function ($key) use ($queryParameters) {
                    return in_array($key, $queryParameters);
                }, ARRAY_FILTER_USE_KEY);
            }

            $url .= self::createUrlParameters($urlParameters ?? []);
        }

        return $url;
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
