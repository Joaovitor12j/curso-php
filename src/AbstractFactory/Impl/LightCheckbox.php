<?php

declare(strict_types=1);

namespace App\AbstractFactory\Impl;

use App\AbstractFactory\CheckBoxInterface;

class LightCheckbox implements CheckboxInterface
{

    public function render(): void
    {
        echo 'Light Checkbox' . PHP_EOL;
    }
}
