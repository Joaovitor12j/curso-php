<?php

declare(strict_types=1);

namespace App\AbstractFactory\Impl;

use App\AbstractFactory\ButtonInterface;
use App\AbstractFactory\CheckBoxInterface;
use App\AbstractFactory\UIFactoryInterface;

final class DarkThemeFactory implements UIFactoryInterface
{

    public function createButton(): ButtonInterface
    {
        return new DarkButton();
    }

    public function createCheckBox(): CheckBoxInterface
    {
        return new DarkCheckbox();
    }
}
