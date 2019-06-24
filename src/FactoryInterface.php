<?php

namespace denbora\R_T_G_Services;

/**
 * Interface FactoryInterface
 * @package denbora\R_T_G_Services
 */
interface FactoryInterface
{
    /**
     * @param string $type
     * @return mixed
     */
    public static function build(string $type);
}