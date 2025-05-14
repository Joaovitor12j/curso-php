<?php

declare(strict_types=1);

namespace App\AbstractFactory;

interface UIFactoryInterface
{
    public function createButton(): ButtonInterface;

    public function createCheckBox(): CheckBoxInterface;
}
