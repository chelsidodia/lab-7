<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Logger;


$logger = new Logger();


$logger->info('info message.');


$logger->error('error message.');