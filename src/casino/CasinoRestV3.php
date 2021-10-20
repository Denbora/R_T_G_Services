<?php

namespace denbora\R_T_G_Services\casino;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\responses\RestV2Response;
use denbora\R_T_G_Services\services\REST\RestServiceInterface;
use denbora\R_T_G_Services\services\RESTv3\AccountService;
use denbora\R_T_G_Services\services\RESTv3\AffiliateService;
use denbora\R_T_G_Services\services\RESTv3\AutoCompleteService;
use denbora\R_T_G_Services\services\RESTv3\CashierService;
use denbora\R_T_G_Services\services\RESTv3\CasinoService;
use denbora\R_T_G_Services\services\RESTv3\CdkService;
use denbora\R_T_G_Services\services\RESTv3\CouponService;
use denbora\R_T_G_Services\services\RESTv3\DataScienceService;
use denbora\R_T_G_Services\services\RESTv3\EmailNotificationService;
use denbora\R_T_G_Services\services\RESTv3\ExternalLobbyService;
use denbora\R_T_G_Services\services\RESTv3\GameService;
use denbora\R_T_G_Services\services\RESTv3\HistoryService;
use denbora\R_T_G_Services\services\RESTv3\JackpotService;
use denbora\R_T_G_Services\services\RESTv3\LobbyService;
use denbora\R_T_G_Services\services\RESTv3\MessageService;
use denbora\R_T_G_Services\services\RESTv3\PlayerService;
use denbora\R_T_G_Services\services\RESTv3\PromotionService;
use denbora\R_T_G_Services\services\RESTv3\ReportService;
use denbora\R_T_G_Services\services\RESTv3\ServiceService;
use denbora\R_T_G_Services\services\RESTv3\SettingsService;
use denbora\R_T_G_Services\services\RESTv3\TournamentService;
use denbora\R_T_G_Services\services\RESTv3\VigService;
use denbora\R_T_G_Services\services\RESTv3\WalletService;
use denbora\R_T_G_Services\validators\RestV3Validator;

/**
 * Class CasinoRestV3
 *
 * @package denbora\R_T_G_Services\casino
 * @property AccountService AccountService
 * @property AffiliateService AffiliateService
 * @property AutoCompleteService AutoCompleteService
 * @property CashierService CashierService
 * @property CasinoService CasinoService
 * @property CdkService CdkService
 * @property CouponService CouponService
 * @property DataScienceService DataScienceService
 * @property EmailNotificationService EmailNotificationService
 * @property ExternalLobbyService ExternalLobbyService
 * @property GameService GameService
 * @property HistoryService HistoryService
 * @property JackpotService JackpotService
 * @property LobbyService LobbyService
 * @property MessageService MessageService
 * @property PlayerService PlayerService
 * @property PromotionService PromotionService
 * @property ReportService ReportService
 * @property ServiceService ServiceService
 * @property SettingsService SettingsService
 * @property TournamentService TournamentService
 * @property VigService VigService
 * @property WalletService WalletService
 */
class CasinoRestV3 extends AbstractCasinoRest
{
    /**
     * @var array
     */
    protected $restV3Services = [];

    /**
     * @param string $serviceName
     * @return RestServiceInterface|mixed
     * @throws R_T_G_ServiceException
     */
    public function __get(string $serviceName)
    {
        $serviceNamespace = 'denbora\\R_T_G_Services\\services\\RESTv3\\' . $serviceName;

        if (class_exists($serviceNamespace)) {
            return $this->createService($serviceNamespace);
        }

        throw new R_T_G_ServiceException('No such service - ' . $serviceName);
    }

    /**
     * @param string $serviceName
     * @return RestServiceInterface
     * @throws R_T_G_ServiceException
     */
    public function getService(string $serviceName): RestServiceInterface
    {
        return $this->__get($serviceName);
    }

    /**
     * @param string $serviceName
     * @return RestServiceInterface
     */
    protected function createService(string $serviceName): RestServiceInterface
    {
        if (!key_exists($serviceName, $this->restV3Services)) {
            /** @var $serviceInstance RestServiceInterface */
            $serviceInstance = new $serviceName(
                $this->certificateFile,
                $this->keyFile,
                $this->password,
                new RestV3Validator(),
                new RestV2Response(),
                $this->baseUrl,
                $this->apiKey
            );

            if (!$serviceInstance->hasConnectTimeout()) {
                $serviceInstance->setConnectTimeout($this->connectTimeout);
            }

            if (!$serviceInstance->hasTimeout()) {
                $serviceInstance->setTimeout($this->timeout);
            }

            $this->restV3Services[$serviceName] = $serviceInstance;
        }

        return $this->restV3Services[$serviceName];
    }
}
