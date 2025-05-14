<?php

declare(strict_types=1);

namespace App\FactoryMethod\Impl;

use App\FactoryMethod\LoggerInterface;

final class DatabaseManager extends AbstractLogManager
{
    private string $dsn;

    public function __construct(string $dsn)
    {
        $this->dsn = $dsn;
    }

    protected function createLogger(): LoggerInterface
    {
        return new DatabaseLogger($this->dsn);
    }
}
