<?php

namespace denbora\R_T_G_Services\responses;

use Httpful\Response;

interface ResponseInterface
{
    public function getContent(Response $response);
}
