<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\FactoryInterface;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class ValidatorFactory implements FactoryInterface
{
    /**
     * Creates new Validator object
     *
     * @param string $type
     * @return ValidatorInterface
     * @throws R_T_G_ServiceException
     */
    public static function build(string $type) : ValidatorInterface
    {
        $validator = 'denbora\\R_T_G_Services\\validators\\' . ucwords($type);

        if (class_exists($validator)) {
            return new $validator();
        } else {
            throw new R_T_G_ServiceException("Invalid validator given.");
        }
    }
}
