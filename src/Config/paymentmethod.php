<?php
return [
    'przelewy24_standard' => [
        'code' => 'przelewy24_standard',
        'title' => 'Przelewy24 Standard',
        'description' => 'shop::app.checkout.onepage.przelewy24',
        'class' => 'CNetic\Przelewy24\Payment\Przelewy24',
        'sandbox' => true,
        'active' => true,
        'business_account' => 'test@cnetic.pl',
        'p24_merchant_id' => '76632',
        'crc_key' => '759417f7370e5666',
        'api_url' => 	'https://secure.przelewy24.pl',
        'sandbox_url' => 	'https://sandbox.przelewy24.pl',
        'sort' => 3,
        'admin_view' => 'cnetic-przelewy24:admin.edit'
    ]
];
