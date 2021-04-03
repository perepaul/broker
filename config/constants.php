<?php
return [
    'bitcoin_address'=>env('BITCOIN_ADDRESS','1L77UqwMz9B59yn9qW5xjqcbhySbA2gbjm'),
    'bitcoin_qr_code'=> '/assets/back/deriv-qr.jpeg',
    'ethereum_address'=>env('ETHEREUM_ADDRESS','0xe0fcae11db58ff4b08ee2d436aa12d84d32607a4'),
    'ethereum_qr_code'=> '/assets/back/deriv-eth.jpeg',
    'usdt_address'=>env('USDT_ADDRESS','0xe0fcae11db58ff4b08ee2d436aa12d84d32607a4'),
    'usdt_qr_code'=> '/assets/back/deriv-usdt.jpeg',
    'notification_email' => env('NOTIFICATION_EMAIL','support@derivtrading.com'),
    'phone_number' => env('PHONE_NUMBER','+1(479)282-2368'),
    'favicon'=>'/assets/img/logo/favicon.png',
    'logo' => '/assets/img/logo.png',
    'logo_white' => '/assets/img/logo.png',
    'default_image' => 'default.png',
    'deposit_image_dir' => '/assets/img/deposit/',
    'profile_image_dir' => '/assets/img/profile/',
    'document_dir' => '/assets/img/documents/',
    'email_attachment_dir' => '/assets/img/attachements/',
];
