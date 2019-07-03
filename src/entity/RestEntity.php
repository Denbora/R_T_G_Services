<?php

namespace denbora\R_T_G_Services\entity;

class RestEntity
{
    /**
     * @var RestEntity|null
     */
    private static $instance = null;

    /**
     * @var string
     */
    private $pathTemplate = '';

    /**
     * @var string
     */
    private $url = '';

    /**
     * @var array
     */
    private $query = [];

    /**
     * @var string
     */
    private $httpMethod = '';

    /**
     * @var array
     */
    private $parameters = [];

    /**
     * @var array
     */
    private $responseStatuses = [];

    /**
     * @return string
     */
    public function getPathTemplate(): string
    {
        return $this->pathTemplate;
    }

    /**
     * @param string $pathTemplate
     * @return RestEntity
     */
    public function setPathTemplate(string $pathTemplate): self
    {
        $this->pathTemplate = str_replace('/api/', '', $pathTemplate);
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return RestEntity
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array
     */
    public function getQuery(): array
    {
        return $this->query;
    }

    /**
     * @param array $query
     * @return RestEntity
     */
    public function setQuery(array $query): self
    {
        $this->query = $query;
        return $this;
    }

    /**
     * @return string
     */
    public function getHttpMethod(): string
    {
        return $this->httpMethod;
    }

    /**
     * @param string $httpMethod
     * @return RestEntity
     */
    public function setHttpMethod(string $httpMethod): self
    {
        $this->httpMethod = $httpMethod;
        return $this;
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     * @return RestEntity
     */
    public function setParameters(array $parameters): self
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * @return array
     */
    public function getResponseStatuses(): array
    {
        return $this->responseStatuses;
    }

    /**
     * @param $responseStatuses
     * @return RestEntity
     */
    public function setResponseStatuses($responseStatuses): self
    {
        $this->responseStatuses = $responseStatuses;
        return $this;
    }

    /**
     * @param array $methodData
     * @return RestEntity
     */
    public function hydrate(array $methodData): self
    {
        $this->setHttpMethod($methodData['method'])
            ->setPathTemplate($methodData['path'])
            ->setParameters($methodData['parameters'])
            ->setResponseStatuses($methodData['responses']);

        return $this;
    }

    /**
     * @return RestEntity
     */
    public static function getInstance(): RestEntity
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}
