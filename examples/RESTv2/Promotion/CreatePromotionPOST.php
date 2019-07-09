<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Promotion;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class CreatePromotionPOST extends RestExample
{
    /**
     * CreatePromotionPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'name' => 'string',
                'description' => 'string',
                'priority' => 0,
                'status' => true,
                'activation_date' => '2019-07-05T15:52:55.457Z',
                'expiration_date' => '2019-07-05T15:52:55.457Z',
                'include_player_id_list' => 'string',
                'exclude_player_id_list' => 'string',
                'banner_image' => 'string',
                'text_position' => 'TopRight',
                'text_alignment' => 'Center',
                'title' => 'string',
                'title_color_hex_code' => 'string',
                'subtitle' => 'string',
                'subtitle_color_hex_code' => 'string',
                'details_text' => 'string',
                'details_color_hex_code' => 'string',
                'banner_button_text' => 'string',
                'banner_button_text_color_hex_code' => 'string',
                'banner_button_color_hex_code' => 'string',
                'banner_action' => 'None',
                'banner_action_value' => 'string',
                'information_page_content' => 'string',
                'translations' => [
                    [
                        'language' => 'string',
                        'title' => 'string',
                        'subtitle' => 'string',
                        'details_text' => 'string',
                        'banner_button_text' => 'string',
                        'title_color_hex_code' => 'string',
                        'subtitle_color_hex_code' => 'string',
                        'details_color_hex_code' => 'string',
                        'banner_button_color_hex_code' => 'string',
                        'banner_button_text_color_hex_code' => 'string',
                        'information_page_content' => 'string',
                        'banner_image' => 'string',
                        'text_position' => 'TopRight',
                        'text_alignment' => 'Center',
                    ],
                ],
                'enabled_skins' => [0],
                'enabled_player_classes' => [0],
                'enabled_player_statuses' => [0],
            ];

            $result = $casino->PromotionService->createPromotionPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
