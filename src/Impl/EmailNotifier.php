<?php

declare(strict_types=1);

namespace App\Impl;

use App\NotifierInterface;

final class EmailNotifier extends  AbstractNotifier implements NotifierInterface
{
    public function send(string $recipient, string $message): void
    {
        echo $this->getStr($recipient, $message);
    }
}
