<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'SendGrid\\Stats\\' => array($vendorDir . '/sendgrid/sendgrid/lib/stats'),
    'SendGrid\\Mail\\' => array($vendorDir . '/sendgrid/sendgrid/lib/mail'),
    'SendGrid\\Contacts\\' => array($vendorDir . '/sendgrid/sendgrid/lib/contacts'),
    'SendGrid\\' => array($vendorDir . '/sendgrid/php-http-client/lib', $vendorDir . '/sendgrid/sendgrid/lib'),
    'Dotenv\\' => array($vendorDir . '/vlucas/phpdotenv/src'),
    'Delight\\Http\\' => array($vendorDir . '/delight-im/http/src'),
    'Delight\\Db\\' => array($vendorDir . '/delight-im/db/src'),
    'Delight\\Cookie\\' => array($vendorDir . '/delight-im/cookie/src'),
    'Delight\\Base64\\' => array($vendorDir . '/delight-im/base64/src'),
    'Delight\\Auth\\' => array($vendorDir . '/delight-im/auth/src'),
);
