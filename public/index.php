<?php
require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// 創建一個 Logger 實例，名稱為 WISD
$logger = new Logger('WISD');
$logger->pushHandler(new StreamHandler(__DIR__ . '/../log/app.log', Logger::DEBUG));

// 寫入日誌訊息
$logger->debug('This is a debug message');
$logger->info('This is an info message');
$logger->warning('This is a warning message');
$logger->error('This is an error message');

echo "Log messages have been written to log/app.log";
