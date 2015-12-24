<?php
defined('InShopNC') or exit('Access Invalid!');

$lang['store_goods_index_goods_limit']			= 'You have reached the upper limit of the added product.';
$lang['store_goods_index_goods_limit1']			= 'If you want to continue to increase the product, please go to the "store settings" to upgrade the store level';
$lang['store_goods_index_pic_limit']			= 'You have reached the upper limit of the image space';
$lang['store_goods_index_pic_limit1']			= 'M，If you want to continue to increase the product, please go to the "store settings" to upgrade the store level';
$lang['store_goods_index_time_limit']			= 'You have reached the time limit for the use of the shop，If you want to continue to increase the product，Please go to "store settings" to upgrade the store level';
$lang['store_goods_index_no_pay_type']			= 'Platform has not set the payment method, please contact the platform in a timely manner';
/**
 * 图片上传
 */
$lang['store_goods_upload_pic_limit']			= 'you\'ve reached the upper limit of the image space';
$lang['store_goods_upload_pic_limit1']			= 'M，If you want to continue to increase the product, please go to the "store settings" to upgrade the store level';
$lang['store_goods_upload_fail']				= 'Upload failed';
$lang['store_goods_upload_upload']				= 'upload';
$lang['store_goods_upload_normal']				= 'Common upload';
$lang['store_goods_upload_del_fail']			= 'Delete image failed';
$lang['store_goods_img_upload']					= 'Picture upload';

/**
 * 淘宝导入
 */
$lang['store_goods_import_choose_file']		= 'Please choose to upload the CSV file';
$lang['store_goods_import_unknown_file']	= 'File source unknown';
$lang['store_goods_import_wrong_type']		= 'The file type must be CSV, and the file type you are uploading is:';
$lang['store_goods_import_size_limit']		= 'File size must be'.ini_get('upload_max_filesize').'以内';
$lang['store_goods_import_wrong_class']		= 'Please select a product category（Must be selected to the final level.）';
$lang['store_goods_import_wrong_class1']	= 'The product category is not available，Please re select the product category（Must be selected to the final level.）';
$lang['store_goods_import_wrong_class2']	= 'Must be selected to the final level.';
$lang['store_goods_import_wrong_column']	= 'The field in the file is not in conformity with the requirements of the system. Please read the instructions in detail.';
$lang['store_goods_import_choose']			= 'please select...';
$lang['store_goods_import_step1']			= 'Step 1: import the CSV file';
$lang['store_goods_import_choose_csv']		= 'Please select a file：';
$lang['store_goods_import_title_csv']		= 'Import the default from the second rows of the implementation of the import，Please keep the header row of the first line of the CSV file.'.ini_get('upload_max_filesize');
$lang['store_goods_import_goods_class']		= 'commodity classification：';
$lang['store_goods_import_store_goods_class']	= 'Store classification：';
$lang['store_goods_import_new_class']			= 'New category';
$lang['store_goods_import_belong_multiple_store_class']	= 'Can be classified as belonging to more than one';
$lang['store_goods_import_unicode']			= 'Character encoding：';
$lang['store_goods_import_file_type']		= 'file format：';
$lang['store_goods_import_file_csv']		= 'CSV file';
$lang['store_goods_import_desc']			= 'Import description：';
$lang['store_goods_import_csv_desc']		= '1 if you modify the CSV file, please be sure to use Microsoft Excel software，And must ensure the first row header name contains the following items: 
Baby name, baby category, recency, price, number of baby baby,The period of validity, freight, mail, courier, EMS, window recommend, baby description, a new picture.<br/>
2.If Taobao assistant version differences and header name，Please modify the name before you can import, do not distinguish between new, second-hand, idle and so on，After the introduction of commodity types are new。<br/>
3.If the CSV file is more than'.ini_get('upload_max_filesize').'Please through the Excel software editor into a number of files to import。<br/>
4.Up to 5 pictures per product support.';
$lang['store_goods_import_submit']			= 'leading-in';
$lang['store_goods_import_step2']			= 'The second step: upload pictures';
$lang['store_goods_import_tbi_desc']		= 'Please upload the CSV file at the same level as the images file (or the same name as the CSV file with the same name) within the TBI file';
$lang['store_goods_import_upload_complete'] = "Upload finished";
$lang['store_goods_import_doing'] 			= "Is importing...";
$lang['store_goods_import_step3']			= 'The third step: finishing data';
$lang['store_goods_import_remind']			= 'The first two steps before the completion of the data can be carried out, to confirm the collation of data';
$lang['store_goods_import_remind2']			= '（If the picture is divided into several times, please complete the finishing of all pictures）';
$lang['store_goods_import_pack']			= 'Sorting data';
$lang['store_goods_pack_wrong1']			= 'Please import the CSV file first';
$lang['store_goods_pack_wrong2']			= 'Please import the correct CSV file';
$lang['store_goods_pack_success']			= 'Data finish';
$lang['store_goods_import_end']				= '，Last';
$lang['store_goods_import_products_no_import']	= 'Pieces of goods are not imported';
$lang['store_goods_import_area']			= 'location：';

/*淘宝文件导入*/
$lang['store_goods_import_upload_album'] = 'Import album selection';
$lang['store_goods_index_batch_upload']	 = 'Bulk upload';

/**
 * ajax修改商品标题
 */
$lang['store_goods_title_change_tip']		= 'Click to modify the title name of the commodity, the length of <br/> at least 3 characters, the longest 50 Chinese characters';

/**
 * ajax修改商品库存
 */
$lang['store_goods_stock_change_stock']		= 'Modify inventory';
$lang['store_goods_stock_change_tip']		= 'Modify inventory';
$lang['store_goods_stock_stock_sum']		= 'Total inventory';
$lang['store_goods_stock_change_more_stock']= 'Modify more inventory information';
$lang['store_goods_stock_input_error']		= 'Please fill in the number not less than zero!';

/**
 * ajax修改商品库存
 */
$lang['store_goods_price_change_price']		= 'Please fill in the number not less than zero';
$lang['store_goods_price_change_tip']		= 'Modify the price';
$lang['store_goods_price_change_more_price']= 'Modify more price information';
$lang['store_goods_price_input_error']		= 'Please fill in the correct price！';

/**
 * ajax修改商品推荐
 */
$lang['store_goods_commend_change_tip']		= 'Choose whether to recommend goods as a shop';

?>
