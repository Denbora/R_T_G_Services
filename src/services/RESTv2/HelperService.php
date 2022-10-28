<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\entity\RestEntity;
use denbora\R_T_G_Services\responses\RestResponse;
use denbora\R_T_G_Services\validators\ValidatorInterface;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class HelperService extends RestV2Service
{
    const RESPONSE_CODES = __DIR__ . '/../../config/codes_v2.json';

    /**
     * @var array with response statuses
     */
    protected $responseStatuses;

    public function __construct(
        string $certificate,
        string $key,
        string $password,
        ValidatorInterface $validator,
        RestResponse $response,
        string $baseUrl,
        string $apiKey,
        $options = []
    ) {
        $this->responseStatuses = json_decode(file_get_contents(self::RESPONSE_CODES), true);
        parent::__construct($certificate, $key, $password, $validator, $response, $baseUrl, $apiKey, $options);
    }

    /**
     * @param string $httpMethod
     * @param string $urlRequest
     * @param string $bodyJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function manualSendRequest(string $httpMethod, string $urlRequest, string $bodyJSON = '{}')
    {
        $responseStatuses = $this->getResponseStatuses($httpMethod, $urlRequest);

        $restEntity = RestEntity::getInstance()
            ->setResponseStatuses($responseStatuses)
            ->setUrl($urlRequest)
            ->setHttpMethod(strtoupper($httpMethod))
            ->setQuery(json_decode($bodyJSON, true));

        return $this->sendRequest($restEntity);
    }

    protected function getResponseStatuses(string $httpMethod, string $urlRequest): array
    {
        $pathArray = explode('/', trim(parse_url($urlRequest, PHP_URL_PATH), '/'));
        $requestTo = array_shift($pathArray);

        $queryPath = strtoupper($httpMethod) . ' /' . (implode('/', $pathArray));

        foreach ($this->responseStatuses as $pathTemplate => $responseStatuses) {
            $regexPathTemplate = preg_replace('/\{([\w\-]+)\}/', '([\w\-]+)', addcslashes($pathTemplate, '/'));
            if (preg_match('/' . $regexPathTemplate . '/', $queryPath, $match)) {
                return $responseStatuses;
            }
        }

        return [];
    }
}
