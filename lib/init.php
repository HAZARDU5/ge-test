<?php

namespace Gladtest;

const GLAD_ROOT = '../';

// Local config
require_once '../config.local.php';

error_reporting(-1);

ini_set('date.timezone', 'Pacific/Auckland');

// Catch errors as exceptions
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});

// Composer autoload
require_once '../vendor/autoload.php';
