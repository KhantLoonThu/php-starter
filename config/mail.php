<?php

/* 
 | -------------------------------------------------------------------------- 
 | Mail Configuration
 | -------------------------------------------------------------------------- 
 | Settings for sending email, including the mail driver, SMTP settings,
 | and the default sender information.
 */
return [
    /* 
     | --------------------------------------------------------------------------
     | Mail Driver
     | -------------------------------------------------------------------------- 
     | The mail driver to use (e.g., 'smtp', 'mailgun', etc.).
     */
    'driver'        => env('MAIL_DRIVER', 'smtp'), // Default is 'smtp'

    /* 
     | --------------------------------------------------------------------------
     | Mail Host
     | -------------------------------------------------------------------------- 
     | The SMTP server host (e.g., 'smtp.mailtrap.io').
     */
    'host'          => env('MAIL_HOST', 'smtp.mailtrap.io'), // Default is 'smtp.mailtrap.io'

    /* 
     | --------------------------------------------------------------------------
     | Mail Port
     | -------------------------------------------------------------------------- 
     | The port to use for SMTP (2525 for Mailtrap, etc.).
     */
    'port'          => env('MAIL_PORT', 2525), // Default is 2525

    /* 
     | --------------------------------------------------------------------------
     | Mail Username
     | -------------------------------------------------------------------------- 
     | The username for authenticating with the SMTP server.
     */
    'username'      => env('MAIL_USERNAME', null), // Default is null

    /* 
     | --------------------------------------------------------------------------
     | Mail Password
     | -------------------------------------------------------------------------- 
     | The password for authenticating with the SMTP server.
     */
    'password'      => env('MAIL_PASSWORD', null), // Default is null

    /* 
     | --------------------------------------------------------------------------
     | Mail Encryption
     | -------------------------------------------------------------------------- 
     | The encryption protocol to use ('ssl', 'tls', or null).
     */
    'encryption'    => env('MAIL_ENCRYPTION', null), // Default is null

    /* 
     | --------------------------------------------------------------------------
     | From Address
     | -------------------------------------------------------------------------- 
     | The email address to send messages from.
     */
    'from' => [
        'address'   => env('MAIL_FROM_ADDRESS', 'no-reply@myphpapp.local'),
        'name'      => env('MAIL_FROM_NAME', env('APP_NAME', 'MyPHPApp')),
    ],
];
