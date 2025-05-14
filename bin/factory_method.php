<?php

declare(strict_types=1);

use App\FactoryMethod\Impl\DatabaseManager;
use App\FactoryMethod\Impl\FileLogManager;

require __DIR__ . '/../vendor/autoload.php';

if (!isset($argv[0])) {
    $logManager = new DatabaseManager('ssss');
} else {
    $filePath = sys_get_temp_dir() . '/log.txt';
    $logManager = new FileLogManager($filePath);
}
$logManager->log('TEste 1');
$logManager->log('TEste 2');
echo '-----------------------' . PHP_EOL;


