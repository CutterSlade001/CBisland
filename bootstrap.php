<?php declare(strict_types=1);

require __DIR__ . '/config/config.php';
require APP_SERVICES . '/helper.php';

ini_set('display_errors', 'off');
ini_set('display_startup_errors', 'off');
ini_set('error_reporting', E_ALL);
ini_set('log_errors', 'on');
ini_set('error_log', APP_ROOT . '/storage/logs/php_errors.log');

