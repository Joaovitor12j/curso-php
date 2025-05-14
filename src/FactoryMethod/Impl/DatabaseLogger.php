<?php

declare(strict_types=1);

namespace App\FactoryMethod\Impl;

use App\FactoryMethod\LoggerInterface;

final class DatabaseLogger implements LoggerInterface
{
    private string $dsn;

    public function __construct(string $dsn)
    {
        $this->dsn = $dsn;
        echo 'Conectando com o banco de dados';
    }

    public function log(string $message): void
    {
        $date = date('Y-m-d H:i:s');
        echo sprintf(
            '[%s] DatabaseLogger: %s',
            $date,
            $message
        );
    }
}
