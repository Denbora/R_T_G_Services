<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\entity\RestEntity;
use denbora\R_T_G_Services\R_T_G_ServiceException;
use Httpful\Response;

class RestV2Response extends RestResponse implements ResponseInterface
{
    /**
     * @param Response $response
     * @return array|object|string
     * @throws R_T_G_ServiceException
     */
    public function getContent(Response $response)
    {
        if (!in_array($response->code, self::HTTP_SUCCESSFUL_OPERATION)) {
            if ($response->code != 500) {
                $message = $this->getError($response);
            } else {
                $message = 'Error in request execution. Please contact Support.';
            }

            throw new R_T_G_ServiceException('RTG Message - ' . $message, $response->code);
        }

        return $response->body;
    }

    /**
     * get error from codeList using code
     *
     * @param Response $response
     * @return mixed
     */
    private function getError(Response $response)
    {
        $responseCode = $response->code;

        $restEntity = RestEntity::getInstance();
        $responseStatuses = $restEntity->getResponseStatuses();

        if (isset($responseStatuses[$responseCode])) {
            $bodyString = $response->__toString();
            $rtgErrorMessage = '';

            if (!empty($bodyString)) {
                $rtgErrorMessage = ' Error from rtg - ' . $bodyString;
            }

            return $responseStatuses[$responseCode] . $rtgErrorMessage;
        }

        return 'Response code: ' . $responseCode;
    }
}
