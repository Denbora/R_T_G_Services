<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\Httpful\Response;

interface ResponseInterface
{
    public function getContent(Response $response);
}
