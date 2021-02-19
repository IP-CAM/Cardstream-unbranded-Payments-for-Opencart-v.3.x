# Opencart-Unbranded# README

# Contents

- Introduction
- Prerequisites
- Rebranding
- Installing and configuring the module
- License

# Introduction

This Opencart module provides an easy method to integrate with the payment gateway.
 - Supports Opencart versions: **3.X**

# Prerequisites

- The module requires the following prerequisites to be met in order to function correctly:
    - The 'bcmath' php extension module: https://www.php.net/manual/en/book.bc.php

> Please note that we can only offer support for the Module itself. While every effort has been made to ensure the payment module is complete and bug free, we cannot guarentee normal functionality if unsupported changes are made.

# Rebranding

1. Update the following variables located in `httpdocs/admin/language/en-gb/extension/payment/payment_network.php` replacing `Payment Network` with your brand name:
	- Line 3: `$_['heading_title'] = 'Payment Network';`
	- Line 6: `$_['text_edit'] = "Edit Payment Network Settings";`
	- Line 8: `$_['text_success']    = 'Success: You have modified Payment Network account details!';`
	- Line 13: `$_['text_merchantid']       = "Enter the merchant ID provided by Payment Network MMS, use 100001 for testing";`
	- Line 14: `$_['text_merchantsecret']   = "Enter the merchant secret provided by Payment Network MMS, use Circle4Take40Idea for testing";`
	- Line 27: `$_['entry_status']       = 'Payment Network On/Off:';`
	- You'll also need to change the web address located on line 10, to match that which we provide.
2. Update the following variables located in `httpdocs/catalog/controller/extension/payment/payment_network.php` replacing the web address to match that which we provide.
	- Line 17: `const API_ENDPOINT_DIRECT = 'https://gateway.example.com/direct/';`
3. Update the following variables located in `httpdocs/catalog/language/en-gb/extension/payment/payment_network.php` replacing `Payment Network` and any web addresses, to match your brand and that which we provide, respectively.
	- Line 5: `$_['form_hosted_url'] = 'https://gateway.example.com/hosted/';`
	- Line 6: `$_['form_hosted_modal_url'] = 'https://gateway.example.com/hosted/modal';`
	- Line 7: `$_['form_direct_url'] = 'https://gateway.example.com/direct/';`
	- Line 10: `$_['text_title']        = 'Credit Card / Debit Card (Payment Network)';`
	- Line 11: `$_['text_response']     = 'Response from Payment Network:';`
4. Update references to `Payment Network` in the file `httpdocs/catalog/view/theme/default/template/extension/payment/payment_network_hosted.twig`, to your brand
	- Line 2: `	<p>You will be redirected to the Payment Network Payment Gateway to complete payment.</p>`
5. Update references to `Payment Network` in the file `httpdocs/catalog/view/theme/default/template/extension/payment/payment_network_iframe.twig`, to your brand
	- Line 4: `<p class="paymentgatewaymoduleform-message">You will be presented with the Payment Network Payment Gateway to complete payment.</p>`
6. Change the filename of `httpdocs/admin/controller/extension/payment/payment_network.php` file, to your brand name
7. Change the logo in `httpdocs/admin/view/image/payment/` to match your brand
8. When downloading as a zip file, you can right-click and rename to remove the `Unbranded` text from the filename.

# Installing and configuring the module

1. Copy the contents of the httpdocs directory into the root OpenCart directory.
2. Navigate to the Extentsions dropdown -> Extensions -> Payment methods -> PaymentNetwork and hit 'Activate'
3. Navigate to the Extentsions dropdown -> Extensions -> Payment methods -> PaymentNetwork and hit the 'Edit' button
4. Enter your MerchantID / Secretkey and update the customer/country code.
5. Selects what type of integration you would like to use.
6. Set what status you would like to update an order to once paid
7. Set the Enabled option to true.
8. Click 'Save Changes'.

License
----
MIT
