<?php
// Composer is :

// A dependency manager for PHP

// It makes it easy to use third-party packages/libraries


// Load Composer autoload file
require 'vendor/autoload.php';

// Example: use Monolog package
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('app');
$log->pushHandler(new StreamHandler('app.log'));

$log->info('Composer package working!');

echo "Composer added successfully in PHP";