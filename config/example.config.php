<?php declare(strict_types=1);

// ------------------------------------------------------------------------------
// -- Paths
// ------------------------------------------------------------------------------

define('APP_ROOT', dirname(__DIR__));

const APP_PUBLIC    = APP_ROOT . DIRECTORY_SEPARATOR . 'public';
const APP_SERVICES  = APP_ROOT . DIRECTORY_SEPARATOR . 'services';
const APP_TEMPLATES = APP_ROOT . DIRECTORY_SEPARATOR . 'templates';


// ------------------------------------------------------------------------------
// -- Database configuration
// ------------------------------------------------------------------------------

const DB = [
    'name'    => '', // Database name
    'pass'    => '',
    'user'    => '',
    'host'    => '127.0.0.1',
    'port'    => 3306,
    'options' => [],
];
