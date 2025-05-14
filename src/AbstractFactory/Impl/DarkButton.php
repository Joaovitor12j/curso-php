<?php

declare(strict_types=1);

namespace App\AbstractFactory\Impl;

use App\AbstractFactory\ButtonInterface;

final class DarkButton implements ButtonInterface
{

    public function render(): void
    {
        echo 'Dark Button' . PHP_EOL;
    }
}
