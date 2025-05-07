<?php

declare(strict_types=1);

namespace App\Impl;

abstract class AbstractNotifier
{
    protected function getStr(string $recipient, string $message): string
    {
        return 'Enviando email para ' . $recipient . ' com a mensagem: ' . $message . PHP_EOL;
    }
}
