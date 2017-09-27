<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ValidationException;

/**
 * Class BaseValidator
 * @package denbora\R_T_G_Services\validators
 */
class BaseValidator
{
    /**
     * @var array
     */
    protected $classMethods;

    /**
     * Error message, or some error info
     *
     * @var string
     */
    private $error;

    /**
     * CasinoValidator constructor.
     */
    public function __construct()
    {
        $this->classMethods = get_class_methods(get_class($this));
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }

    /**
     * This method checks is all of $needles are $keys in $array
     *
     * @param array $needles
     * @param array $array
     * @return bool
     */
    protected function allInArrayKeyExists($needles, $array)
    {
        $missed = '';

        foreach ($needles as $value) {
            if (!array_key_exists($value, $array)) {
                $missed = $missed . ' ' . $value;
            }
        }

        if ($missed != '') {
            $this->error = $missed;
            return false;
        }
        return true;
    }

    /**
     * @param $value
     * @param $key
     * @param $errorPrefix
     * @throws R_T_G_ValidationException
     */
    protected function intOrError($value, $key, $errorPrefix)
    {
        if (!is_int($value)) {
            throw new R_T_G_ValidationException($errorPrefix . $key . ' should be int, ' .
                gettype($value) . ' given');
        }
    }

    /**
     * @param $value
     * @param $key
     * @param $errorPrefix
     * @throws R_T_G_ValidationException
     */
    protected function stringOrError($value, $key, $errorPrefix)
    {
        if (!is_string($value)) {
            throw new R_T_G_ValidationException($errorPrefix . $key . ' should be string, ' .
                gettype($value) . ' given');
        }
    }

    /**
     * @param $value
     * @param $key
     * @param $errorPrefix
     * @throws R_T_G_ValidationException
     */
    protected function dateOrError($value, $key, $errorPrefix)
    {
        if (!strtotime($value)) {
            throw new R_T_G_ValidationException($errorPrefix . $key . ' should beDateTime!');
        }
    }

    /**
     * @param $value
     * @param $key
     * @param $errorPrefix
     * @throws R_T_G_ValidationException
     */
    protected function boolOrError($value, $key, $errorPrefix)
    {
        if (!is_bool($value)) {
            throw new R_T_G_ValidationException($errorPrefix . $key . ' should be bool, ' .
                gettype($value) . ' given');
        }
    }

    /**
     * @param $value
     * @param $key
     * @param $errorPrefix
     * @throws R_T_G_ValidationException
     */
    protected function isEntered($value, $key, $errorPrefix)
    {
        if (empty($value) && !isset($value)) {
            throw new R_T_G_ValidationException($errorPrefix . $key . ' is a required field');
        }
    }
}
