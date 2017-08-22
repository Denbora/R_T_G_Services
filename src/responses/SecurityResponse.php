<?php

namespace denbora\R_T_G_Services\responses;

class SecurityResponse extends BaseResponse implements ResponseInterface
{
    public function cleanResponse($response)
    {
        return $response;
    }

    public function createToken($response)
    {
        return $response;
    }

    public function validateToken($response)
    {
        return $response;
    }

    public function createTokenByApp($response)
    {
        return $response;
    }

    public function validateTokenByApp($response)
    {
        return $response;
    }

    public function createGameRestrictedTokenByApp($response)
    {
        return $response;
    }
}
