<?php
defined('InShopNC') or exit('Access Invalid!');
$lang['voucher_unavailable']    = 'Vouchers function is not open';
$lang['voucher_applystate_new']    = 'Pending audit';
$lang['voucher_applystate_verify']    = 'Already examine';
$lang['voucher_applystate_cancel']    = 'Has been canceled';
$lang['voucher_quotastate_activity']	= 'normal';
$lang['voucher_quotastate_cancel']    = 'cancel';
$lang['voucher_quotastate_expire']    = 'End';
$lang['voucher_templatestate_usable']	= 'Effective';
$lang['voucher_templatestate_disabled']= 'Invalid';
$lang['voucher_quotalist']= 'Package list';
$lang['voucher_applyquota']= 'Application package';
$lang['voucher_applyadd']= 'Purchase packages';
$lang['voucher_templateadd']= 'New vouchers';
$lang['voucher_templateedit']= 'Edit vouchers';
$lang['voucher_templateinfo']= 'With vouchers';
/**
 * 套餐申请
 */
$lang['voucher_apply_num_error']= 'Number cannot be empty, and must be an integer between 1-12';
$lang['voucher_apply_goldnotenough']= "Currently you have a number of gold coins%s, not enough to pay the transaction, please recharge";
$lang['voucher_apply_fail']= 'Package application failed';
$lang['voucher_apply_succ']= 'Package application success, please wait for the audit';
$lang['voucher_apply_date']= 'date of application';
$lang['voucher_apply_num']    		= 'Number of applications';
$lang['voucher_apply_addnum']    		= 'Package purchase quantity';
$lang['voucher_apply_add_tip1']    		= 'Purchase units for the month (30 days), a maximum of 12 months to buy，You can buy in the period on a monthly basis issued vouchers';
$lang['voucher_apply_add_tip2']    		= 'You need to pay%s yuan per month';
$lang['voucher_apply_add_tip3']    		= '%s times a month up to release activities';
$lang['voucher_apply_add_tip4']    		= 'Package time from the beginning of the examination and approval';
$lang['voucher_apply_add_confirm1']    	= 'You need to pay a total of';
$lang['voucher_apply_add_confirm2']    	= 'Yuan, confirmed to buy it？';
$lang['voucher_apply_goldlog']    		= 'Purchase vouchers for%s months, the price of gold%s,%s gold total cost';
$lang['voucher_apply_buy_succ']			= 'Package purchase success';

/**
 * 套餐
 */
$lang['voucher_quota_startdate']    	= 'start time';
$lang['voucher_quota_enddate']    		= 'finish time';
$lang['voucher_quota_timeslimit']    	= 'Limit of activity';
$lang['voucher_quota_publishedtimes']   = 'Number of published activities';
$lang['voucher_quota_residuetimes']    	= 'Number of remaining activities';
/**
 * 代金券模板
 */
$lang['voucher_template_quotanull']			= 'Currently there is no available package, please apply for the package';
$lang['voucher_template_noresidual']		= "The current package in the activities of the%s has been full of activity information, can not be re released activities";
$lang['voucher_template_pricelisterror']	= 'Platform vouchers denomination setting appears to help solve the problem, please contact customer service';
$lang['voucher_template_title_error'] 		= "Template name can not be empty and can not be more than 50 characters";
$lang['voucher_template_total_error'] 		= "Can be issued to the number can not be empty and must be more than 1 of the integer";
$lang['voucher_template_price_error']		= "Template value can not be empty and must be an integer, and the amount can not be greater than the limit";
$lang['voucher_template_limit_error'] 		= "Template use consumption limits can not be empty and must be numeric";
$lang['voucher_template_describe_error'] 	= "Template description can not be empty and can not be more than 200 characters";
$lang['voucher_template_title']			= 'Vouchers.';
$lang['voucher_template_enddate']		= 'period of validity';
$lang['voucher_template_enddate_tip']		= 'Validity should be within the validity period of the package, the package is valid for';
$lang['voucher_template_price']			= 'denomination';
$lang['voucher_template_total']			= 'Total number of available';
$lang['voucher_template_eachlimit']		= 'Per person limit collar';
$lang['voucher_template_eachlimit_item']= 'Unlimited';
$lang['voucher_template_eachlimit_unit']= 'nervous';
$lang['voucher_template_orderpricelimit']	= 'Consumption amount';
$lang['voucher_template_describe']		= 'Vouchers description';
$lang['voucher_template_styleimg']		= 'Select skin vouchers';
$lang['voucher_template_styleimg_text']	= 'Store coupons';
$lang['voucher_template_image']			= 'Vouchers pictures';
$lang['voucher_template_image_tip']		= 'The picture will be displayed in the center of the integral voucher module, recommended size is 160*160px。';
$lang['voucher_template_list_tip1'] = "1、Manually set the vouchers after failure, the user will not be able to receive the vouchers, but already receive vouchers can still be used";
$lang['voucher_template_list_tip2'] = "2、Automatic failure voucher template and issued vouchers expired";
$lang['voucher_template_backlist'] 	= "Return list";
$lang['voucher_template_giveoutnum']= 'Already receive';
$lang['voucher_template_usednum']	= 'Already used';
/**
 * 代金券
 */
$lang['voucher_voucher_state'] = "state";
$lang['voucher_voucher_state_unused'] = "Not used";
$lang['voucher_voucher_state_used'] = "Already used";
$lang['voucher_voucher_state_expire'] = "Has expired";
$lang['voucher_voucher_price'] = "Amount of money";
$lang['voucher_voucher_storename'] = "Applicable shop";
$lang['voucher_voucher_indate'] = "period of validity";
$lang['voucher_voucher_usecondition'] = "working conditions";
$lang['voucher_voucher_usecondition_desc'] = "Full order";
$lang['voucher_voucher_vieworder'] = "View orders";
$lang['voucher_voucher_readytouse'] = "Immediately use";
$lang['voucher_voucher_code'] = "Code";
?>
