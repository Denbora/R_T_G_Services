<?php

namespace denbora\R_T_G_Services\services\RESTv3;

use denbora\R_T_G_Services\helpers\UrlHelper;
use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\responses\RestResponse;
use denbora\R_T_G_Services\entity\RestEntity;
use denbora\R_T_G_Services\services\REST\RestService;
use denbora\R_T_G_Services\validators\ValidatorInterface;

abstract class RestV3Service extends RestService implements RestV3ServiceInterface
{
    const METHOD_V3_PATH = __DIR__ . '/../../config/restMethodsV3.json';

    /**
     * @var array with service methods
     */
    private $restMethods;

    public function __construct(
        string $certificate,
        string $key,
        string $password,
        ValidatorInterface $validator,
        RestResponse $response,
        string $baseUrl,
        string $apiKey
    ) {
        $this->restMethods = json_decode(file_get_contents(self::METHOD_V3_PATH), true);
        parent::__construct($certificate, $key, $password, $validator, $response, $baseUrl, $apiKey);
    }

    /**
     * @param string $service
     * @param string $method
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    protected function callMethod(string $service, string $method, string $queryJSON = '{}')
    {
        $methodData = $this->getMethodData($service, $method);

        $restEntity = RestEntity::getInstance()
            ->hydrate($methodData)
            ->setQuery(json_decode($queryJSON, true));

        list($url, $query) = UrlHelper::createFullUrl(
            $this->baseUrl,
            $restEntity->getPathTemplate(),
            $restEntity->getQuery(),
            $this->getKeyForQueryParameters($restEntity->getParameters())
        );

        $restEntity->setUrl($url);
        $restEntity->setQuery($query);

        return $this->sendRequest($restEntity);
    }

    /**
     * @param string $service
     * @param string $method
     * @return array
     * @throws R_T_G_ServiceException
     */
    private function getMethodData(string $service, string $method): array
    {
        if (!isset($this->restMethods[$service])) {
            throw new R_T_G_ServiceException('Service not found');
        }

        if (!isset($this->restMethods[$service][$method])) {
            throw new R_T_G_ServiceException(
                'Service: "' . $service . '" does not contain the "' . $method . '" method'
            );
        }

        return $this->restMethods[$service][$method];
    }

    /**
     * @param array $methodParameters
     * @return array
     */
    private function getKeyForQueryParameters(array $methodParameters): array
    {
        foreach ($methodParameters as $parameterKey => $parameter) {
            if (isset($parameter['parameterType']) && $parameter['parameterType'] == 'query') {
                $queryParameters[] = $parameterKey;
            }
        }

        return $queryParameters ?? [];
    }

    /**
     * @param RestEntity $restEntity
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    protected function sendRequest(RestEntity $restEntity)
    {
        $httpMethod = strtolower($restEntity->getHttpMethod());

        return $this->$httpMethod($restEntity->getUrl(), json_encode($restEntity->getQuery()));
    }
}
