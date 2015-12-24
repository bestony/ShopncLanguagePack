<?php
defined('InShopNC') or exit('Access Invalid!');
/**
 * 共有语言	
 */

/**
 * index
 */
$lang['payment_index_order']					= 'Order';
$lang['payment_index_not_exists']				= 'Non-existent';
$lang['payment_index_pay_finish']				= 'Already paid';
$lang['payment_index_add_info_fail']			= 'Failed to add payment for order information';
$lang['payment_index_refresh_fail']				= 'Refresh failed';
$lang['payment_index_sys_not_support']			= 'The system does not support the selected payment method:';
$lang['payment_index_lose_file']				= 'Specified payment interface does not exist';
$lang['payment_index_spec_order_not_exists1']	= 'Payment number';
$lang['payment_index_spec_order_not_exists2']	= 'Order does not exist';
$lang['payment_index_miss_pay_method']			= 'Lack of payment methods';
$lang['payment_index_miss_pay_method_data']		= 'Loss of payment data';
$lang['payment_index_identify_fail']			= 'Validation failure';
$lang['payment_index_order_ensure']				= 'Order status has been confirmed';
$lang['payment_index_deal_order_success']		= 'Order to pay success, is to go to my order';
$lang['payment_index_deal_pdr_success']			= 'Recharge success, is to go to my list';
$lang['payment_index_deal_order_fail']			= 'Order processing timeout, please try again later';
$lang['payment_index_input_pay_info']			= 'Please enter the payment message';
$lang['payment_index_not_belong_you']			= 'Please enter the payment message';
$lang['payment_index_pay_method_tip']			= 'as:Transfer account, time, etc..You can also pay for the order in the user center later';
$lang['payment_index_submit']					= 'submit';
$lang['payment_index_buyerinfo_error']			= 'Membership information error';
$lang['payment_index_password_error']			= 'Member login password error';
$lang['payment_order_predeposit_logdesc']		= 'Consumption reduces the amount of pre deposit available';
$lang['payment_order_predepositfreeze_logdesc']	= 'Consumption increases the amount of pre deposit freeze';
$lang['payment_predeposit_short_error']			= 'Insufficient pre deposit balance，Please recharge';
$lang['payment_refund_predeposit_logdesc']		= 'Refunds to reduce the amount of pre deposit available';
$lang['payment_pay_predeposit_logdesc']	= 'Refunds to increase the amount of pre deposit available';
$lang['payment_refund_predepositfreeze_logdesc']	= 'Refunds to reduce the amount of pre deposit freeze';