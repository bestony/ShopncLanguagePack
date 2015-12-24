<?php
defined('InShopNC') or exit('Access Invalid!');
/**
 * 积分礼品兑换功能公用
 */
$lang['pointcart_unavailable']	 		= 'System does not open the integration or redeem function';
$lang['pointcart_parameter_error']		= 'parameter error';
$lang['pointcart_record_error']			= 'Error in recording information';
$lang['pointcart_unlogin_error']		= 'Please login first';
$lang['pointcart_goodsname']			= 'Gift name';
$lang['pointcart_exchangepoint']		= 'Exchange integral';
$lang['pointcart_exchangenum']			= 'Exchange quantity';
$lang['pointcart_pointoneall']			= 'Integral subtotal';
$lang['pointcart_ensure_order']			= 'Confirmation exchange list';
$lang['pointcart_ensure_info']			= 'Confirm consignee information';
$lang['pointcart_exchange_finish']		= 'Exchange completed';
$lang['pointcart_cart_allpoints']		= 'Required total integration';
$lang['pointcart_shipfee']				= 'freight';
$lang['pointcart_step2_prder_trans_to']	= 'Send to';
$lang['pointcart_step2_prder_trans_receive']	= 'Consignee';
$lang['pointcart_buyer_error']			= 'Buyer information error';
/**
 * 购物车
 */
$lang['pointcart_cart_addcart_fail']		= 'Exchange failure';
$lang['pointcart_cart_addcart_willbe']		= 'Integral gift exchange activity is about to begin';
$lang['pointcart_cart_addcart_end']			= 'Integral gift exchange activities have ended';
$lang['pointcart_cart_addcart_pointshort']	= 'Integration is insufficient, please choose other gifts';
$lang['pointcart_cart_addcart_prodexists']	= 'You have redeemed the gift.';
$lang['pointcart_cart_modcart_fail']		= 'Modify failed';
$lang['pointcart_cart_chooseprod_title']	= 'Have chosen to exchange gifts';
$lang['pointcart_cart_handle']				= 'operation';
$lang['pointcart_cart_reduse']				= 'Reduce';
$lang['pointcart_cart_increase']			= 'Increase';
$lang['pointcart_cart_del']					= 'delete';
$lang['pointcart_cart_submit']				= 'Confirmation exchange';
$lang['pointcart_cart_continue']			= 'Continue to exchange';
$lang['pointcart_cart_null']				= 'You have not chosen to exchange gifts';
$lang['pointcart_cart_exchangenow']			= 'To change the money right away';
$lang['pointcart_cart_exchanged_list']		= 'View exchanged information';
/**
 * step1
 */
$lang['pointcart_step1_receiver_address']	= 'consignee\'s address';
$lang['pointcart_step1_manage_receiver_address']	= 'Manage consignee address';
$lang['pointcart_step1_addnewaddress_submit']	= 'Save consignee address';
$lang['pointcart_step1_receiver_name']		= 'Consignee\'s name';
$lang['pointcart_step1_phone']				= 'Telephone';
$lang['pointcart_step1_new_address']		= 'Use a new receiving address';
$lang['pointcart_step1_input_true_name']	= 'Please fill in the real name';
$lang['pointcart_step1_area']				= 'Local area';
$lang['pointcart_step1_edit']				= 'Edit';
$lang['pointcart_step1_please_choose']		= 'please select';
$lang['pointcart_step1_choose_area']		= 'Please select the area';
$lang['pointcart_step1_whole_address']		= 'Address in detail';
$lang['pointcart_step1_true_address']		= 'Please fill in the real address，Do not need to repeat to fill in the area';
$lang['pointcart_step1_zipcode']			= 'Postcode';
$lang['pointcart_step1_zipcode_tip']		= 'Please fill in the post encoding';
$lang['pointcart_step1_zipcode_error']		= 'Post encoding consists of 6 digits';
$lang['pointcart_step1_phone_num']			= 'phone number';
$lang['pointcart_step1_telphone']			= 'Phone number must be filled in at least one';
$lang['pointcart_step1_mobile_num']			= 'Phone number';
$lang['pointcart_step1_auto_save']			= 'Automatically save receiving address';
$lang['pointcart_step1_auto_saved']			= 'After selecting this address will be saved to your receiving address list';
$lang['pointcart_step1_message']			= 'Remark message';
$lang['pointcart_step1_message_advice']		= 'The students can write down your gifts demand';
$lang['pointcart_step1_submit']				= 'Exchange completed';
$lang['pointcart_step1_chooseprod']			= 'Selected gifts';
$lang['pointcart_step1_order_wrong1']		= 'I\'m sorry, you have to fill in the order information.';
$lang['pointcart_step1_order_wrong2']		= 'An error (as shown in red italics), please check and amend to submit again！';
$lang['pointcart_step1_input_address']		= 'Please fill in the details of the consignee.';
$lang['pointcart_step1_input_receiver']		= 'Please fill in the name of your consignee';
$lang['pointcart_step1_phone_format']		= 'The telephone number by numbers, pluses and minuses, spaces, and parentheses, not less than 6';
$lang['pointcart_step1_wrong_mobile']		= 'Cell phone number can only be a number, and not less than 6';

$lang['pointcart_step1_goods_info']					= 'Exchange product information';
$lang['pointcart_step1_goods_point']				= 'Exchange required points';
$lang['pointcart_step1_goods_num']					= 'Exchange quantity';
$lang['pointcart_step1_return_list']				= 'Return to the exchange list';
/**
 * step2
 */
$lang['pointcart_step2_fail']				= 'Exchange operation failed';
$lang['pointcart_step2_exchange_success']	= 'Exchange success！';
$lang['pointcart_step2_order_created']		= 'Your exchange order has been successfully generated.';
$lang['pointcart_step2_order_sn']			= 'Exchange number';
$lang['pointcart_step2_order_allpoints']	= 'Exchange integral';
$lang['pointcart_step2_view_order']			= 'View detailed list';
$lang['pointcart_step2_choose_method_to_pay']= 'Select payment method';
$lang['pointcart_step2_paymessage']			= 'Pay a message';
$lang['pointcart_step2_choose_pay_method']	= 'Please select the payment method';
$lang['pointcart_step2_ensure_pay']			= 'Confirm payment';
$lang['pointcart_step2_orderinfo_title']	= 'Exchange order information is as follows';
$lang['pointcart_step2_pay_online']			= 'Exchange order information is as follows';
$lang['pointcart_step2_pay_offline']		= 'Exchange order information is as follows';

$lang['pointcart_step2_paymentnull']		= 'Sorry, there is no way to meet the conditions for the time being, please contact customer service to follow up the purchase process';


$lang['pointcart_step2_paymessage_nullerror']	= 'Please fill in the remittance information';
$lang['pay_bank_user']			= 'Name of remittance';
$lang['pay_bank_bank']			= 'Import Bank';
$lang['pay_bank_account']		= 'Remittance account';
$lang['pay_bank_num']			= 'Remittance amount';
$lang['pay_bank_date']			= 'Remittance date';
$lang['pay_bank_extend']		= 'Other';
$lang['pay_bank_order']			= 'Remittance number';

/**
 * step3
 */
$lang['pointcart_step3_paymenterror']	= '支付方式错误';
$lang['pointcart_step3_choosepayment']	= '请选择支付方式';
$lang['pointcart_step3_paysuccess']		= '兑换信息支付成功';
$lang['pointcart_step3_payfail']		= '兑换信息支付失败';
$lang['pointcart_step3_predepositreduce_logdesc']= '积分兑换减少预存款可用金额';