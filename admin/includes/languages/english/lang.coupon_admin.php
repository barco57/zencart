<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: neekfenwick 2024 Feb 23 Modified in v2.0.0-beta1 $
*/

$define = [
    'HEADING_TITLE' => 'Discount Coupons',
    'HEADING_TITLE_STATUS' => 'Status : ',
    'TEXT_COUPON' => 'Coupon Name:',
    'TEXT_COUPON_ALL' => 'All Coupons',
    'TEXT_COUPON_ACTIVE' => 'Active Coupons',
    'TEXT_COUPON_INACTIVE' => 'Inactive Coupons',
    'TEXT_SUBJECT' => 'Subject:',
    'TEXT_UNLIMITED' => 'Unlimited',
    'TEXT_FROM' => 'From:',
    'TEXT_FREE_SHIPPING' => 'Free Shipping',
    'TEXT_MESSAGE' => 'Message:',
    'TEXT_RICH_TEXT_MESSAGE' => 'Rich-Text Message:',
    'TEXT_CONFIRM_DELETE' => 'Are you sure you want to deactivate this Coupon?',
    'TEXT_SEE_RESTRICT' => 'Restrictions Apply',
    'TEXT_COUPON_ANNOUNCE' => 'We\'re pleased to offer you a Store Coupon',
    'TEXT_TO_REDEEM' => 'You can redeem this coupon during checkout. Just enter the code in the box provided, and click on the redeem button.',
    'TEXT_VOUCHER_IS' => 'The coupon code is ',
    'TEXT_REMEMBER' => 'Don\'t lose the coupon code, make sure to keep the code safe so you can benefit from this special offer.',
    'TEXT_VISIT' => 'Visit us at %s',
    'TEXT_COUPON_HELP_DATE' => '<p>The coupon is valid between %s and %s</p>',
    'HTML_COUPON_HELP_DATE' => '<p>The coupon is valid between %s and %s</p>',
    'CUSTOMER_ID' => 'Customer ID',
    'CUSTOMER_NAME' => 'Customer Name',
    'REDEEM_DATE' => 'Date Redeemed',
    'IP_ADDRESS' => 'IP Address',
    'TEXT_REDEMPTIONS' => 'Redemptions',
    'TEXT_REDEMPTIONS_TOTAL' => 'In Total',
    'TEXT_REDEMPTIONS_CUSTOMER' => 'For this Customer',
    'TEXT_NO_FREE_SHIPPING' => 'No Free Shipping',
    'NOTICE_EMAIL_SENT_TO' => 'Notice: Email sent to: %s',
    'ERROR_NO_CUSTOMER_SELECTED' => 'Error: No customer has been selected.',
    'ERROR_NO_SUBJECT' => 'Error: No subject has been entered.',
    'COUPON_NAME' => 'Coupon Name',
    'COUPON_AMOUNT' => 'Coupon Amount',
    'TEXT_COUPON_PRODUCT_COUNT_PER_ORDER' => 'Per Order',
    'TEXT_COUPON_PRODUCT_COUNT_PER_PRODUCT' => 'Per Qualifying Item',
    'COUPON_CODE' => 'Coupon Code',
    'COUPON_STARTDATE' => 'Start Date',
    'COUPON_FINISHDATE' => 'End Date',
    'COUPON_RESTRICTIONS' => 'Restrictions',
    'COUPON_FREE_SHIP' => 'Free Shipping',
    'COUPON_DESC' => 'Coupon Description <br>(Customer can see)',
    'COUPON_MIN_ORDER' => 'Coupon Minimum Order',
    'COUPON_TOTAL' => 'Coupon Minimum calculated from: ',
    'TEXT_COUPON_TOTAL_PRODUCTS' => 'Allowed Products',
    'TEXT_COUPON_TOTAL_PRODUCTS_BASED' => '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Based on Total of Allowed Products according to Coupon Restriction Rules)',
    'TEXT_COUPON_TOTAL_ORDER' => 'All Products',
    'TEXT_COUPON_TOTAL_ORDER_BASED' => '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Based on Full Order Total of All Products Regardless of Qualifying Coupon Restrictions)',
    'COUPON_USES_COUPON' => 'Uses per Coupon',
    'COUPON_USES_USER' => 'Uses per Customer',
    'COUPON_REFERRER' => 'Valid Referrers',
    'COUPON_REFERRER_EXISTS' => 'Coupon \'%s\' (id %d) already exists with the referrer \'%s\'',
    'COUPON_PRODUCTS' => 'Valid Product List',
    'COUPON_CATEGORIES' => 'Valid Categories List',
    'DATE_CREATED' => 'Date Created',
    'DATE_MODIFIED' => 'Date Modified',
    'TEXT_HEADING_NEW_COUPON' => 'Create New Coupon',
    'TEXT_NEW_INTRO' => 'Please fill out the following information for the new coupon.<br>',
    'COUPON_ZONE_RESTRICTION' => 'Coupon Zone Restriction: ',
    'TEXT_COUPON_ZONE_RESTRICTION' => 'Coupon Zone Restriction are optional.',
    'COUPON_ORDER_LIMIT' => 'Customer previous Orders less than: ',
    'COUPON_ORDER_LIMIT_HELP' => 'Customer must have previous Orders less than, leave blank for unlimited',
    'COUPON_IS_VALID_FOR_SALES' => 'Coupon valid for sales and specials:',
    'TEXT_COUPON_IS_VALID_FOR_SALES' => 'Coupon IS allowed for Products on Sale or Special',
    'TEXT_COUPON_IS_VALID_FOR_SALES_EMAIL' => 'Coupon is valid for Products on Sale or Special',
    'TEXT_NO_COUPON_IS_VALID_FOR_SALES' => 'Coupon NOT allowed for Products on Sale or Special',
    'TEXT_NO_COUPON_IS_VALID_FOR_SALES_EMAIL' => 'Coupon is not valid for Products on Sale or Special',
    'ERROR_NO_COUPON_AMOUNT' => 'No coupon amount entered',
    'ERROR_NO_COUPON_NAME' => 'No coupon name entered ',
    'ERROR_COUPON_EXISTS' => 'A coupon with that code already exists',
    'COUPON_NAME_HELP' => 'A short name for the coupon',
    'COUPON_AMOUNT_HELP' => 'The value of the discount for the coupon, either fixed or add a % on the end for a percentage discount.<br>Per Order or Per Qualifying Item applies only when amount is used.',
    'COUPON_CODE_HELP' => 'You can enter your own code here, or leave blank for an auto generated one.',
    'COUPON_STARTDATE_HELP' => 'The date the coupon will be valid from',
    'COUPON_FINISHDATE_HELP' => 'The date the coupon expires',
    'COUPON_FREE_SHIP_HELP' => 'The coupon gives free shipping on an order.',
    'COUPON_DESC_HELP' => 'A description of the coupon for the customer',
    'COUPON_MIN_ORDER_HELP' => 'Coupon Minimum Order',
    'COUPON_TOTAL_HELP' => 'If you specify a Coupon Minimum Order for this Discount Coupon, do you want the Minimum amount to be based on Allowed Products according to Coupon Restriction Rules or the Full Order Total, when determining if the Coupon Minimum Order has been met?<br>NOTE: Full Order Total means at least 1 of the Qualifying Restricted Products must be in the cart for the Discount Coupon to work.',
    'COUPON_SALE_HELP' => 'If you choose <i>NOT allowed</i>, products on sale or special will not be discounted or counted towards the coupon minimum order.',
    'COUPON_USES_COUPON_HELP' => 'The maximum number of times the coupon can be used, leave blank if you want no limit.',
    'COUPON_USES_USER_HELP' => 'Number of times a user can use the coupon, leave blank for no limit.',
    'COUPON_REFERRER_HELP' => 'Domains to automatically apply the coupon when visiting from, comma separated. e.g. "jills-blog.com" or "bobsbits.com,thisandthat.com".',
    'COUPON_BUTTON_PREVIEW' => 'Preview',
    'COUPON_BUTTON_CONFIRM' => 'Confirm',
    'COUPON_ACTIVE' => 'Status',
    'COUPON_START_DATE' => 'Starts',
    'COUPON_EXPIRE_DATE' => 'Expires',
    'TEXT_INFO_DUPLICATE_MANAGEMENT' => '<strong>Multiple Discount Coupons Management</strong><br><br>Click on Discount Coupon to base changes on<br>or use the selected Base Coupon Code: <strong>%s</strong>',
    'ERROR_DISCOUNT_COUPON_WELCOME' => 'Discount Coupon CANNOT be deactivated. This Discount Coupon is the Welcome Discount Coupon<br><br>Change the Welcome Discount Coupon before trying to delete it. See Admin->Configuration->GV Coupons',
    'SUCCESS_COUPON_DISABLED' => 'Success! Discount Coupon was set to Inactive ...',
    'TEXT_COUPON_NEW' => 'Use NEW Discount Coupon Code:',
    'ERROR_DISCOUNT_COUPON_DUPLICATE' => 'WARNING! Duplicate Coupon exists ... Copy cancelled for Coupon Code: ',
    'TEXT_CONFIRM_COPY' => 'Are you sure you want to Copy this Discount Coupon to another Discount Coupon?',
    'SUCCESS_COUPON_DUPLICATE' => 'Success! Discount Coupon was duplicated ...<br><br>Be sure to check Coupon Name and Dates ...',
    'WARNING_COUPON_DUPLICATE' => 'Warning! No Discount Coupons were made! Number of Discount Coupons to create was not defined ... ',
    'WARNING_COUPON_DUPLICATE_FAILED' => 'Warning! Coupon duplication failed',
    'TEXT_COUPON_COPY_INFO' => 'Copy for multiple duplicates',
    'TEXT_COUPON_COPY_DUPLICATE' => 'Create Multiple Coupons with Base Coupon Code of: ',
    'TEXT_COUPON_COPY_DUPLICATE_CNT' => 'How many duplicate Discount Coupons do you want to create? ',
    'TEXT_CONFIRM_DELETE_DUPLICATE' => 'Delete all matching Discount Coupons based on the Base coupon code<br>Example: <strong>%s</strong> would delete all Discount Coupons codes starting with: <strong>%s</strong>',
    'TEXT_COUPON_DELETE_DUPLICATE' => 'Delete all Discount Coupons matching base code: ',
    'TEXT_DISCOUNT_COUPON_EMAIL' => 'Email',
    'TEXT_DISCOUNT_COUPON_CONFIRM_DELETE' => 'Confirm Deactivate',
    'TEXT_DISCOUNT_COUPON_CONFIRM_RESTORE' => 'Confirm Restore',
    'TEXT_DISCOUNT_COUPON_EDIT' => 'Edit',
    'TEXT_DISCOUNT_COUPON_DELETE' => 'Deactivate',
    'TEXT_DISCOUNT_COUPON_DEACTIVATED' => 'Deactivated: ',
    'TEXT_DISCOUNT_COUPON_RESTORE' => 'Restore',
    'TEXT_DISCOUNT_COUPON_RESTRICT' => 'Restrict',
    'TEXT_DISCOUNT_COUPON_REPORT' => 'Report',
    'TEXT_DISCOUNT_COUPON_COPY' => 'Copy',
    'TEXT_DISCOUNT_COUPON_COPY_MULTIPLE' => 'Copy to Multiple',
    'TEXT_DISCOUNT_COUPON_DELETE_MULTIPLE' => 'Deactivate Multiple',
    'TEXT_DISCOUNT_COUPON_REPORT_MULTIPLE' => 'Multiple Report',
    'TEXT_DISCOUNT_COUPON_DOWNLOAD' => 'Download Multiple',
    'REDEEM_ORDER_ID' => 'Order #',
    'SUCCESS_COUPON_REACTIVATE' => 'Successful Reactivate',
    'TEXT_CONFIRM_REACTIVATE' => 'Are you sure you want to restore this Coupon?<br>NOTE: Restore does not affect Start/Expiration Dates.<br>Restore does not affect limits on use per coupon/use per customer if already redeemed.',
    'SUCCESS_COUPON_FOUND' => 'Discount Coupon found!',
    'ERROR_COUPON_NOT_FOUND' => 'Discount Coupon not found!',
    'ERROR_NO_COUPON_CODE' => 'Discount Coupon coupon code not entered!',
    'ERROR_NO_COUPONS' => 'No coupons',
];

return $define;
