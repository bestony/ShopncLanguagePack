<?php
defined('InShopNC') or exit('Access Invalid!');
/**
 * 共有语言
 */

/**
 * 收货人信息
 */
$lang['member_address_receiver_name']	= 'consignee';
$lang['member_address_location']		= 'In the area';
$lang['member_address_address']			= 'The street address';
$lang['member_address_zipcode']			= 'Postcode';
$lang['member_address_phone']			= 'Phone';
$lang['member_address_mobile']			= 'Cellphone';
$lang['member_address_edit_address']	= 'Edit the address';
$lang['member_address_no_address']		= 'You don\'t have to add shipping address';
$lang['member_address_input_name']		= 'Please fill in your real name';
$lang['member_address_please_choose']	= 'please choose';
$lang['member_address_not_repeat']		= 'Don\'t have to repeat fill in the area';
$lang['member_address_phone_num']		= 'Phone number';
$lang['member_address_area_num']		= 'Area code';
$lang['member_address_sub_phone']		= 'Extension';
$lang['member_address_phone']		    = 'Phone';
$lang['member_address_input_receiver']	= 'Please fill in the consignee name';
$lang['member_address_choose_location']	= 'Please select a region';
$lang['member_address_input_address']	= 'Please fill out the detailed address';
$lang['member_address_zip_code']		= 'The postal code consists of 6 digits';
$lang['member_address_phone_and_mobile']= 'Fixed telephone and mobile phone, please fill out at least one.';
$lang['member_address_phone_rule']		= 'Phone number is composed of digital plus minus Spaces brackets, and it may not be less than six. ';
$lang['member_address_wrong_mobile']	= 'The wrong phone number';

/**
 * 设置发货地址
 */
$lang['store_daddress_wrong_argument']	= 'Parameter is not correct';
$lang['store_daddress_receiver_null']	= 'Shipper can\'t be empty';
$lang['store_daddress_wrong_area']		= 'Area selection is not correct';
$lang['store_daddress_area_null']		= 'Area information can\'t be empty';
$lang['store_daddress_address_null']	= 'Detailed address cannot be empty';
$lang['store_daddress_modify_fail']		= 'Address change failure';
$lang['store_daddress_add_fail']		= 'New address failure';
$lang['store_daddress_del_fail']		= 'Delete address failure';
$lang['store_daddress_del_succ']		= 'Delete the success';
$lang['store_daddress_new_address']		= 'The new address';
$lang['store_daddress_deliver_address']	= 'Ship address';
$lang['store_daddress_default']			= 'Default';
$lang['store_daddress_receiver_name']	= 'Iinkman';
$lang['store_daddress_location']		= 'In the area';
$lang['store_daddress_address']			= 'The street address';
$lang['store_daddress_zipcode']			= 'Postcode';
$lang['store_daddress_phone']			= 'Phone';
$lang['store_daddress_mobile']			= 'Mobile phone';
$lang['store_daddress_company']			= 'Company';
$lang['store_daddress_content']			= 'Remark';
$lang['store_daddress_edit_address']	= 'Compile place';
$lang['store_daddress_no_address']		= 'You did not add the delivery address';
$lang['store_daddress_input_name']		= 'Please fill in your real name';
$lang['store_daddress_please_choose']	= 'Please choose';
$lang['store_daddress_not_repeat']		= 'Don\'t have to repeat fill in the area';
$lang['store_daddress_phone_num']		= 'Phone';
$lang['store_daddress_area_num']		= 'Area code';
$lang['store_daddress_sub_phone']		= 'Extension';
$lang['store_daddress_mobile_num']		= 'Cell phone number';
$lang['store_daddress_input_receiver']	= 'Please fill in the contact name';
$lang['store_daddress_choose_location']	= 'Please select a region';
$lang['store_daddress_input_address']	= 'Please fill in the street address';
$lang['store_daddress_zip_code']		= 'The postal code consists of 6 digits';
$lang['store_daddress_phone']	        = 'Phone';
$lang['store_daddress_phone_rule']		= 'Phone number is composed of digital plus minus Spaces brackets, and it may not be less than six. ';
$lang['store_daddress_wrong_mobile']	= 'The wrong phone number';

/**
 * 设置物流公司
 */
$lang['store_deliver_express_title']	= 'logistics company';

/**
 * 发货
 */
$lang['store_deliver_order_state_send']		= 'Has been shipped';
$lang['store_deliver_order_state_receive']	= 'For the goods';
// $lang['store_deliver_modfiy_address']		= 'Modify the receiving information';
$lang['store_deliver_select_daddress']		= 'Select the delivery address';
$lang['store_deliver_select_ather_daddress']= 'Choose other shipping address';
$lang['store_deliver_daddress_list']		= 'Address the library';
$lang['store_deliver_default_express']		= 'The default logistics company';
$lang['store_deliver_buyer_name']			= 'Buyer';
$lang['store_deliver_buyer_address']		= 'Shipping address';
$lang['store_deliver_shipping_amount']		= 'Freight';
$lang['store_deliver_modify_info']			= 'Edit the delivery';
$lang['store_deliver_first_step']			= 'First step';
$lang['store_deliver_second_step']			= 'Step 2';
$lang['store_deliver_third_step']			= 'the third step';
$lang['store_deliver_confirm_trade']		= 'Confirm receiving information and transaction details';
$lang['store_deliver_forget']				= 'The delivery notes';
$lang['store_deliver_forget_tips']			= 'You can enter some information delivery notes (sellers themselves only visible)';
$lang['store_deliver_buyer_adress']			= 'The consignee information';
$lang['store_deliver_confirm_daddress']		= 'Confirm the delivery information';
$lang['store_deliver_my_daddress']			= 'My shipping information';
$lang['store_deliver_none_set']				= 'Haven\'t set the shipping address, please enter the shipping Settings > Address add repository';
$lang['store_deliver_add_daddress']			= 'Add a shipping address';
$lang['store_deliver_express_select']		= 'Select logistics service';
$lang['store_deliver_express_note']			= 'You can do this by"The delivery is set-><a href="index.php?act=store_deliver_set&op=express" target="_parent" >默认物流公司</a>"添加或修改常用货运物流。免运可切换下方<span class="red">[无需物流运输服务]</span>选项卡并操作。';
$lang['store_deliver_express_zx']			= 'Contact our logistics company';
$lang['store_deliver_express_wx']			= 'Without logistics transportation services';
$lang['store_deliver_company_name']			= 'Company name';
$lang['store_deliver_shipping_code']		= 'Logistics single number';
$lang['store_deliver_bforget']				= 'Memo';
$lang['store_deliver_shipping_code_tips']	= 'Fill in logistics single number correctly, to ensure the delivery tracking query information is correct';
$lang['store_deliver_no_deliver_tips']		= 'If the order of the logistic delivery goods, you can directly click on the confirmation';
$lang['store_deliver_shipping_code_pl']		= 'Please fill out the logistics single number';

/**
 * 选择发货地址
 */
$lang['store_deliver_man']			= ' Consigner';
$lang['store_deliver_daddress']		= 'Ship address';
$lang['store_deliver_telphone']		= 'Phone';

/**
 * 搜索动态物流
 */
$lang['member_show_expre_my_fdback']		= 'I leave a message';
$lang['member_show_expre_type']				= 'Shipping method: contact';
$lang['member_show_expre_company']			= 'logistics company';
$lang['member_show_receive_info']			= 'Receiving information';
$lang['member_show_deliver_info']			= 'The delivery information';