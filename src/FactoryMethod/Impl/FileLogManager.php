<?php

declare(strict_types=1);

namespace App\FactoryMethod\Impl;

use App\FactoryMethod\LoggerInterface;

final class FileLogManager extends AbstractLogManager
{

    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    protected function createLogger(): LoggerInterface
    {
        return new FileLogger($this->filePath);
    }
}
