<?php

declare(strict_types=1);

namespace App\FactoryMethod;

interface LoggerInterface
{
    public function log(string $message): void;

}
