<?php

namespace App\AbstractFactory\Impl;

use App\AbstractFactory\CheckBoxInterface;

final class DarkCheckbox implements CheckboxInterface
{
    public function render(): void
    {
        echo 'Dark Checkbox' . PHP_EOL;
    }
}
