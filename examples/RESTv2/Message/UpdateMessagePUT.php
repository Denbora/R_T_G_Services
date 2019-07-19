<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Message;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class UpdateMessagePUT extends RestExample
{
    /**
     * UpdateMessagePUT constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'messageId' => 1,
                'id' => 0,
                'title' => 'string',
                'code' => 'string',
                'description' => 'string',
                'activation_date' => '2019-07-05T15:52:55.135Z',
                'expiration_date' => '2019-07-05T15:52:55.135Z',
                'message_type' => 'message',
                'playing_mode' => 'fun',
                'body' => 'string',
                'enable' => true,
                'forced_times_shown' => 0,
                'recurrence_days' => ['Sunday'],
                'email_status' => 'all',
                'player_classes' => [
                    [
                        'class_id' => 0,
                        'name' => 'string',
                    ],
                ],
                'player_id_filters' => [
                    [
                        'player_id' => 'string',
                        'action' => 'include',
                    ],
                ],
                'player_filters' => [
                    [
                        'filter_property' => 'playable_balance',
                        'filter_type' => 'day_date_range',
                        'start_date' => '2019-07-05T15:52:55.135Z',
                        'end_date' => '2019-07-05T15:52:55.135Z',
                        'days' => 0,
                        'min_balance' => 0,
                        'max_balance' => 0,
                        'enabled' => true,
                    ],
                ],
                'skins' => [0],
                'countries' => ['string'],
                'client_types' => ['unknown'],
                'currencies' => ['string']
            ];

            $result = $casino->MessageService->updateMessagePUT(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
