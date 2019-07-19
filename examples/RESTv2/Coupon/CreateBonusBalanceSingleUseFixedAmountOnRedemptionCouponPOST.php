<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Coupon;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class CreateBonusBalanceSingleUseFixedAmountOnRedemptionCouponPOST extends RestExample
{
    /**
     * CreateBonusBalanceSingleUseFixedAmountOnRedemptionCouponPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'redeem_amount' => 0,
                'play_through_amount' => 0,
                'can_be_referred' => true,
                'limit_withdrawals' => 'no_limit',
                'limit_withdrawals_fixed_amount' => 0,
                'limit_withdrawals_multiple_deposit' => 0,
                'limit_withdrawals_code' => 'string',
                'disable_all_net_progressives' => true,
                'earnings_restricted_to_deposit' => true,
                'free_spin_deposit_list' => [
                    [
                        'minimum_free_spin_wins' => 0,
                        'maximum_free_spin_wins' => 0,
                        'deposit' => 0,
                        'play_through' => 0,
                        'bonus' => 0,
                        'wager_bonus' => true,
                    ],
                ],
                'previous_coupon_id' => 0,
                'minimum_bonus_balance_type' => 'no_limit',
                'minimum_bonus_balance' => 0,
                'require_deposit_fixed_amount_on_redemption' => true,
                'play_through_free_spin_wins' => 0,
                'wager_bonus' => 0,
                'free_spins_configuration' => [
                    'game_code' => 'string',
                    'denomination' => 0,
                    'number_of_lines' => 0,
                    'number_of_spins' => 0,
                    'enabled' => true,
                ],
                'coupon_code' => 'string',
                'date_valid_start' => '2019-07-05T15:52:54.710Z',
                'date_valid_end' => '2019-07-05T15:52:54.710Z',
                'user_id' => 0,
                'method_list' => 'string',
                'redeem_zero' => 0,
                'redeem_verified_email' => true,
                'redeem_new_players' => true,
                'comment' => 'string',
                'associated_affiliate_id' => 0,
                'redeem_for_affiliate_id' => 0,
                'schedule_days_of_week' => ['Sunday'],
                'schedule_start_time' => 0,
                'schedule_duration_minutes' => 0,
                'published' => true,
                'allow_redemption_from' => ['download'],
                'allowed_skin_list' => [0],
                'exclude_player_class' => 'string',
                'player_filters' => [
                    'days_since_sign_up' => [
                        'type' => 'string',
                        'value' => [],
                    ],
                    'days_since_birthday' => [
                        'type' => 'string',
                        'value' => [],
                    ],
                    'days_since_first_deposit' => [
                        'type' => 'string',
                        'value' => [],
                    ],
                    'days_since_last_deposit' => [
                        'type' => 'string',
                        'value' => [],
                    ],
                    'countries_to_exclude' => ['string'],
                    'currencies' => ['string'],
                ],
                'sim_percent' => 0,
                'count_days_deposit' => 0,
                'count_days_play' => 0,
                'game_play_through_list' => [
                    [
                        'game_id' => 0,
                        'machine_id' => 0,
                        'play_through_per_dollar_wagered' => 0,
                        'excluded' => 0,
                    ],
                ],
            ];

            $result = $casino
                ->CouponService
                ->createBonusBalanceSingleUseFixedAmountOnRedemptionCouponPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
