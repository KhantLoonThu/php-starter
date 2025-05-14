<?php

/* 
 | -------------------------------------------------------------------------- 
 | Application Configuration
 | -------------------------------------------------------------------------- 
 | This file contains general settings for the application.
 | Things like the app name, environment, debug mode, etc.
 */
return [
    /* 
     | --------------------------------------------------------------------------
     | Application Name
     | -------------------------------------------------------------------------- 
     | The name of the application.
     */
    'name' => env('APP_NAME', 'MyPHPApp'), // Using a fallback directly in the env() function

    /* 
     | --------------------------------------------------------------------------
     | Application Environment
     | -------------------------------------------------------------------------- 
     | The environment the application is running in.
     | Typically 'local', 'production', 'staging', etc.
     */
    'env'  => env('APP_ENV', 'production'), // Added default value for 'production'

    /* 
     | --------------------------------------------------------------------------
     | Debug Mode
     | -------------------------------------------------------------------------- 
     | Set this to 'true' for development and 'false' for production.
     */
    'debug' => env('APP_DEBUG', false) === 'true', // This will correctly compare the value to a boolean

    /* 
     | --------------------------------------------------------------------------
     | Application URL
     | -------------------------------------------------------------------------- 
     | The base URL of the application.
     */
    'url'   => env('APP_URL', 'http://localhost'), // Using a fallback URL

    /* 
     | --------------------------------------------------------------------------
     | Default Timezone
     | -------------------------------------------------------------------------- 
     | Set the default timezone for your application.
     */
    'timezone' => env('APP_TIMEZONE', 'UTC'), // Default timezone fallback to 'UTC'

    /* 
     | --------------------------------------------------------------------------
     | Locale Settings
     | -------------------------------------------------------------------------- 
     | The default locale for the application.
     */
    'locale' => env('APP_LOCALE', 'en'), // Fallback to 'en' if locale is not set
];
