<?php
// Heading
$_['heading_title'] = 'Payment Network';

// Text
$_['text_edit'] = "Edit Payment Network Settings";
$_['text_payment']    = 'Payment';
$_['text_success']    = 'Success: You have modified Payment Network account details!';
$_['text_payment_network'] =
    '<a onclick="window.open(\'https://www.cardstream.com\');"><img src="view/image/payment/payment_network.png" alt="Payment Network" title="Payment Network" style="border: 1px solid #EEEEEE;" /></a>';

// placeholders
$_['text_merchantid']       = "Enter the merchant ID provided by Payment Network MMS, use 100001 for testing";
$_['text_merchantsecret']   = "Enter the merchant secret provided by Payment Network MMS, use Circle4Take40Idea for testing";
$_['text_currencycode']     = "Enter the merchant account currency code, use 826 for GBP";
$_['text_countrycode']     = "Enter the merchant account Country code, use 826 for GBP";

// Entrys
$_['entry_merchantid']      = 'Merchant ID:';
$_['entry_merchantsecret']  = 'Merchant Secret:';
$_['entry_countrycode']     = 'Country Code';
$_['entry_currencycode']    = 'Currency Code';
$_['entry_form_responsive'] = 'Form Responsive';

$_['entry_order_status'] = 'Order Status:';
$_['entry_geo_zone']     = 'Geo Zone:';
$_['entry_status']       = 'Payment Network On/Off:';
$_['entry_sort_order']   = 'Sort Order:';

// Errors
$_['error_msg_permission']     = 'Warning: You do not have permission to modify the below configuration';
$_['error_msg_data']           = 'Please correct the errors shown below';
$_['error_msg_merchantid']     = 'Merchant ID must be a number and not left empty';
$_['error_msg_merchantsecret'] = 'Merchant Secret Required!';
$_['error_msg_countrycode']    = 'Valid country code required - must be numeric';
$_['error_msg_currencycode']   = 'Valid currency code required - must be numeric';

// module type switch information
$_['entry_module_type']         = 'Integration Method';
$_['entry_module_hosted']  = 'Hosted';
$_['entry_module_hosted_v2']  = 'Hosted (Embedded)';
$_['entry_module_hosted_v3']  = 'Hosted (Modal)';
$_['entry_module_direct']  = 'Direct';
$_['entry_module_direct_v2']  = 'Direct (3D-Secure v2)';
$_['error_direct_ssl_required'] = 'To use Direct you must have a SSL Certificate installed, this is due to PCI compliance requirements';



