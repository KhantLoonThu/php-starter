<?php

namespace Core;

use Throwable;

class ExceptionHandler
{

    /**
     * Handle the exception.
     *
     * @param  \Throwable  $exception
     * @return void
     */
    public static function handle(Throwable $exception)
    {
        // Log the error message
        self::log($exception, 'error');

        // Show a generic error page to the user
        self::renderErrorPage();
    }

    /**
     * Handle the exception.
     *
     * @param  \Throwable  $exception
     * @return void
     */
    public static function error(Throwable $exception)
    {
        // Log the error message
        self::log($exception, 'error');

        // Show a generic error page to the user
        self::renderErrorPage();
    }

    /**
     * Log the exception message to a file or other logging system.
     *
     * @param  \Throwable  $exception
     * @param  string  $level
     * @return void
     */
    private static function log(Throwable $exception, string $level = 'error')
    {
        // Construct log message with timestamp and exception details
        $logMessage = '[' . date('Y-m-d H:i:s') . '] ';
        $logMessage .= strtoupper($level) . ': ' . $exception->getMessage();
        $logMessage .= ' in ' . $exception->getFile() . ' on line ' . $exception->getLine();
        $logMessage .= PHP_EOL;

        // Log error or info to the appropriate file
        $logFile = __DIR__ . config('log.log_dir') . ($level === 'error' ? 'errors.log' : 'info.log');
        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }

    /**
     * Render a generic error page.
     *
     * @return void
     */
    private static function renderErrorPage()
    {
        echo "Something went wrong! Please Try again. "; // error lines comes in. no showing error page.
    }

    /**
     * Log informational messages.
     *
     * @param string $message
     * @return void
     */
    public static function info(string $message)
    {
        $logMessage = '[' . date('Y-m-d H:i:s') . '] INFO: ' . $message . PHP_EOL;
        file_put_contents(__DIR__ . config('log.log_dir') . 'info.log', $logMessage, FILE_APPEND);
    }
}
