<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ValidationException;

class AffiliateValidator extends BaseValidator implements ValidatorInterface
{

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function listGlobalLinked($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['GlobalID']) && empty($data['GlobalID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'GlobalID is a required field');
        }

        if (!is_string($data['GlobalID']) && !is_numeric($data['GlobalID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'GlobalID should be string, ' .
                gettype($data['GlobalID']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function createAffiliate($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'all data is a required field');
        }

        if (!is_array($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'Data should be array, ' . gettype($data) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function createProgram($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'all data is a required field');
        }

        if (!is_array($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'Data should be array, ' . gettype($data) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getAccountLedger($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['fromDate'] . ' is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['toDate'] . ' is a required field');
        }

        if (!isset($data['aid']) && empty($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['fromDate'] . 'should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['toDate'] . ' should be DateTime!');
        }

        if (!is_int($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid should be int, ' .
                gettype($data['aid']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getAccountLedgerAll($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['fromDate'] . ' is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['toDate'] . ' is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['fromDate'] . 'should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['toDate'] . ' should be DateTime!');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getBannedDeactivatedPlayers($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['fromDate'] . ' is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['toDate'] . ' is a required field');
        }

        if (!isset($data['aid']) && empty($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['fromDate'] . 'should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['toDate'] . ' should be DateTime!');
        }

        if (!is_int($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid should be int, ' .
                gettype($data['aid']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getBannedDeactivatedPlayersALL($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['fromDate'] . ' is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['toDate'] . ' is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['fromDate'] . 'should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['toDate'] . ' should be DateTime!');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getDownloadInformation($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['startdate']) && !isset($data['startdate'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'startdate is a required field');
        }

        if (!isset($data['aid']) && empty($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid is a required field');
        }

        if (!strtotime($data['startdate'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'startdate should be DateTime!');
        }

        if (!is_int($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid should be int, ' .
                gettype($data['aid']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getDownloadInformationAll($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['startdate']) && !isset($data['startdate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' startdate is a required field');
        }

        if (empty($data['enddate']) && !isset($data['enddate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' enddate is a required field');
        }

        if (!strtotime($data['startdate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' startdate should be DateTime!');
        }

        if (!strtotime($data['enddate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' enddate should be DateTime!');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getDownloadInformationByDateRange($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['startdate']) && !isset($data['startdate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' startdate is a required field');
        }

        if (empty($data['enddate']) && !isset($data['enddate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' enddate is a required field');
        }

        if (!strtotime($data['startdate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' startdate should be DateTime!');
        }

        if (!strtotime($data['enddate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' enddate should be DateTime!');
        }

        if (!isset($data['aid']) && empty($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid is a required field');
        }

        if (!is_int($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid should be int, ' .
                gettype($data['aid']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @throws R_T_G_ValidationException
     */
    protected function getGlobalAffiliateStatsByLocalAID($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['gaid']) && empty($data['gaid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'gaid is a required field');
        }

        if (!is_int($data['gaid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'gaid should be int, ' .
                gettype($data['gaid']) . ' given');
        }

        if (empty($data['payperiod']) && !isset($data['payperiod'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' payperiod is a required field');
        }

        if (!strtotime($data['payperiod'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' payperiod should be DateTime!');
        }
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getNewPlayerSignups($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['asOfDate']) && !isset($data['asOfDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' asOfDate is a required field');
        }

        if (empty($data['untilDate']) && !isset($data['untilDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' untilDate is a required field');
        }

        if (!strtotime($data['asOfDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' asOfDate should be DateTime!');
        }

        if (!strtotime($data['untilDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' untilDate should be DateTime!');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getNewPlayerSignupsByAID($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['asOfDate']) && !isset($data['asOfDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' asOfDate is a required field');
        }

        if (empty($data['untilDate']) && !isset($data['untilDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' untilDate is a required field');
        }

        if (!strtotime($data['asOfDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' asOfDate should be DateTime!');
        }

        if (!strtotime($data['untilDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' untilDate should be DateTime!');
        }

        if (!isset($data['aid']) && empty($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid is a required field');
        }

        if (!is_int($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid should be int, ' .
                gettype($data['aid']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerSummary($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate should be DateTime!');
        }

        if (!isset($data['aid']) && empty($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid is a required field');
        }

        if (!is_int($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid should be int, ' .
                gettype($data['aid']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerSummaryALL($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate should be DateTime!');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerSummaryByAIDRange($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['startAID']) && empty($data['startAID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'startAID is a required field');
        }

        if (!is_int($data['startAID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'startAID should be int, ' .
                gettype($data['startAID']) . ' given');
        }

        if (!isset($data['endAID']) && empty($data['endAID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'endAID is a required field');
        }

        if (!is_int($data['endAID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'endAID should be int, ' .
                gettype($data['endAID']) . ' given');
        }

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate should be DateTime!');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayersCount($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if ($data != '') {
            throw new R_T_G_ValidationException($errorPrefix . 'Inputs for getPlayersCount should be empty');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getStatsSummary($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate should be DateTime!');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getStatsSummaryByAID($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['AID']) && empty($data['AID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'AID is a required field');
        }

        if (!is_int($data['AID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'AID should be int, ' .
                gettype($data['AID']) . ' given');
        }

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate should be DateTime!');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getDownloadTrackingIDsByAID($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['AID']) && empty($data['AID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'AID is a required field');
        }

        if (!is_int($data['AID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'AID should be int, ' .
                gettype($data['AID']) . ' given');
        }

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate should be DateTime!');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getDownloadTrackingIDsByDateRange($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate should be DateTime!');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getUnBannedPlayers($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['aid']) && empty($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid is a required field');
        }

        if (!is_int($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid should be int, ' .
                gettype($data['aid']) . ' given');
        }

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate should be DateTime!');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function globalLink($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['GlobalID']) && empty($data['GlobalID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'GlobalID is a required field');
        }

        if (!is_int($data['GlobalID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'GlobalID should be int, ' .
                gettype($data['GlobalID']) . ' given');
        }

        if (!isset($data['LocalID']) && empty($data['LocalID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'LocalID is a required field');
        }

        if (!is_int($data['LocalID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'LocalID should be int, ' .
                gettype($data['LocalID']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function listAffiliates($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if ($data != '') {
            throw new R_T_G_ValidationException($errorPrefix . 'Inputs for listAffiliates should be empty');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function listPrograms($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if ($data != '') {
            throw new R_T_G_ValidationException($errorPrefix . 'Inputs for listPrograms should be empty');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function programChange($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['aid']) && empty($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid is a required field');
        }

        if (!is_int($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid should be int, ' .
                gettype($data['aid']) . ' given');
        }

        if (!isset($data['newProgramID']) && empty($data['newProgramID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'newProgramID is a required field');
        }

        if (!is_int($data['newProgramID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'newProgramID should be int, ' .
                gettype($data['newProgramID']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function updateAffiliate($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!is_array($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'Entered data != array');
        }

        $fields = array(
            'aid',
            'firstName',
            'lastName',
            'newPassword',
            'email',
            'phone',
            'fax',
            'companyName',
            'description',
            'URL',
            'addnlURL',
            'addr1',
            'addr2',
            'city',
            'state',
            'zip',
            'country'
        );
        if (!$this->allInArrayKeyExists($fields, $data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'missed fields -' . $this->getError());
        }

        if (!is_int($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid should be int, ' .
                gettype($data['aid']) . ' given');
        }

        unset($data['aid']);
        array_walk_recursive($data, "validateString");

        return true;
    }

    /**
     * @param $value
     * @throws R_T_G_ValidationException
     */
    private function validateString($value)
    {
        if (!is_string($value)) {
            throw new R_T_G_ValidationException('AID should be int, ' . gettype($value) . ' given');
        }
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getInitialDeposits($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['aid']) && empty($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid is a required field');
        }

        if (!is_int($data['aid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'aid should be int, ' .
                gettype($data['aid']) . ' given');
        }

        if (empty($data['fromDate']) && !isset($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate is a required field');
        }

        if (empty($data['toDate']) && !isset($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate is a required field');
        }

        if (!strtotime($data['fromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' fromDate should be DateTime!');
        }

        if (!strtotime($data['toDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' toDate should be DateTime!');
        }

        return true;
    }
}
