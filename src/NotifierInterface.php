<?php

declare(strict_types=1);

namespace App;

interface NotifierInterface
{
    public function send(string $recipient, string $message): void;
}
