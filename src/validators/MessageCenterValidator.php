<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class MessageCenterValidator extends BaseValidator implements ValidatorInterface
{

    /**
     * @param string $validatorName
     * @param mixed $data
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function call(string $validatorName, $data)
    {
        if (in_array($validatorName, $this->classMethods)) {
            $validator = $this->$validatorName($data);

            return $validator;
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $validatorName . ' does not exist');
        }
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    public function getMessageList($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['PID']) && empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!isset($data['MoneyType']) && empty($data['MoneyType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MoneyType is a required field');
        }

        if (!isset($data['SkinID']) && empty($data['SkinID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'SkinID is a required field');
        }

        if (!isset($data['ClientType']) && empty($data['ClientType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ClientType is a required field');
        }

        if (!is_string($data['PID']) && !is_numeric($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_string($data['MoneyType']) && !is_numeric($data['MoneyType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MoneyType should be string, ' .
                gettype($data['MoneyType']) . ' given');
        }
        if (!is_int($data['SkinID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'SkinID should be int, ' .
                gettype($data['SkinID']) . ' given');
        }

        if (!is_string($data['ClientType']) && !is_numeric($data['ClientType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ClientType should be string, ' .
                gettype($data['ClientType']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getUnreadMessagesCount($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['PID']) && empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }
        if (!isset($data['MoneyType']) && empty($data['MoneyType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MoneyType is a required field');
        }
        if (!isset($data['SkinID']) && empty($data['SkinID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'SkinID is a required field');
        }
        if (!isset($data['ClientType']) && empty($data['ClientType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ClientType is a required field');
        }

        if (!is_string($data['PID']) && !is_numeric($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_string($data['MoneyType']) && !is_numeric($data['MoneyType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MoneyType should be string, ' .
                gettype($data['MoneyType']) . ' given');
        }
        if (!is_int($data['SkinID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'SkinID should be int, ' .
                gettype($data['SkinID']) . ' given');
        }

        if (!is_string($data['ClientType']) && !is_numeric($data['ClientType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ClientType should be string, ' .
                gettype($data['ClientType']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function generateMessageForPlayer($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $fields = array(
            'MessageID',
            'PID',
            'CasinoID',
            'Scheme',
            'CashierURL',
            'PlayMode',
            'ClientType'
        );
        if (!$this->allInArrayKeyExists($fields, $data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'missed fields -' . $this->getError());
        }

        if (!is_int($data['MessageID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MessageID should be int, ' .
                gettype($data['MessageID']) . ' given');
        }

        if (!is_int($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be int, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_int($data['CasinoID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'CasinoID should be int, ' .
                gettype($data['CasinoID']) . ' given');
        }

        if (!is_string($data['Scheme'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Scheme should be string, ' .
                gettype($data['Scheme']) . ' given');
        }

        if (!is_string($data['CashierURL'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'CashierURL should be string, ' .
                gettype($data['CashierURL']) . ' given');
        }

        if (!is_string($data['PlayMode'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PlayMode should be string, ' .
                gettype($data['PlayMode']) . ' given');
        }

        if (!is_string($data['ClientType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ClientType should be string, ' .
                gettype($data['ClientType']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function deleteMessage($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['MessageID']) && empty($data['MessageID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MessageID is a required field');
        }

        if (!isset($data['PID']) && empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!is_string($data['PID']) && !is_numeric($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_int($data['MessageID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MessageID should be int, ' .
                gettype($data['MessageID']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getForceOnEntrance($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['MoneyType']) && empty($data['MoneyType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MoneyType is a required field');
        }

        if (!isset($data['SkinID']) && empty($data['SkinID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'SkinID is a required field');
        }

        if (!isset($data['PID']) && empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!is_string($data['PID']) && !is_numeric($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_int($data['MoneyType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MoneyType should be int, ' .
                gettype($data['MoneyType']) . ' given');
        }

        if (!is_int($data['SkinID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'SkinID should be int, ' .
                gettype($data['SkinID']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getForceOnExit($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['moneyType']) && empty($data['moneyType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'moneyType is a required field');
        }

        if (!isset($data['skinID']) && empty($data['skinID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'skinID is a required field');
        }

        if (!isset($data['PID']) && empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!isset($data['clientType']) && empty($data['clientType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'clientType is a required field');
        }

        if (!is_string($data['PID']) && !is_numeric($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_bool($data['moneyType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'moneyType should be bool, ' .
                gettype($data['moneyType']) . ' given');
        }

        if (!is_int($data['skinID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'skinID should be int, ' .
                gettype($data['skinID']) . ' given');
        }

        if (!is_bool($data['clientType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'clientType should be bool, ' .
                gettype($data['clientType']) . ' given');
        }
        return true;
    }
}
