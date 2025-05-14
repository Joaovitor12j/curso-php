<?php

namespace App\AbstractFactory\Impl;

use App\AbstractFactory\ButtonInterface;

final class LightButton implements ButtonInterface
{

    public function render(): void
    {
        echo 'Light Button' . PHP_EOL;
    }
}
