<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Logger;


$logger = new Logger();


$logger->info('This is an info message.');


$logger->error('This is an error message.');