<?php

/* 
 | --------------------------------------------------------------------------
 | env() Helper Function
 | --------------------------------------------------------------------------
 | Retrieves an environment variable from the .env file.
 | If the variable is not found, it returns the default value provided.
 */
if (!function_exists('env')) {
    function env($key, $default = null)
    {
        return $_ENV[$key] ?? $default;
    }
}

/* 
 | --------------------------------------------------------------------------
 | config() Helper Function
 | --------------------------------------------------------------------------
 | Retrieves a configuration value from the config array.
 | If the config key doesn't exist, it returns the default value.
 */
if (!function_exists('config')) {
    function config($key, $default = null)
    {
        global $GLOBALS; // Access the global $config array
        $keys = explode('.', $key); // Support for nested config keys 

        $value = $GLOBALS['config'];
        foreach ($keys as $key) {
            $value = $value[$key] ?? $default;
        }

        return $value;
    }
}
