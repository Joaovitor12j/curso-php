<?php

declare(strict_types=1);

namespace App\FactoryMethod\Impl;

use App\FactoryMethod\LoggerInterface;

abstract class AbstractLogManager
{
    abstract protected function createLogger(): LoggerInterface;

    public function log(string $message): void
    {
        $logger = $this->createLogger();
        $logger->log($message);
        echo 'Processing logs' . PHP_EOL;
    }
}
