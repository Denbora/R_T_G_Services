<?php


namespace denbora\R_T_G_Services\validators;

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
     * @param $needles
     * @param $array
     * @return bool
     */
    protected function allInArray($needles, $array)
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
}
