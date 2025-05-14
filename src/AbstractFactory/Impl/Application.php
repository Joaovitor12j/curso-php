<?php

declare(strict_types=1);

namespace App\AbstractFactory\Impl;

use App\AbstractFactory\ButtonInterface;
use App\AbstractFactory\CheckBoxInterface;
use App\AbstractFactory\UIFactoryInterface;

final class Application
{
    private ButtonInterface  $button;

    private CheckboxInterface $checkbox;

    public function __construct(UIFactoryInterface $UIFactory)
    {
        $this->button = $UIFactory->createButton();
        $this->checkbox = $UIFactory->createCheckbox();
    }

    public function render(): void
    {
        echo 'Render UI' . PHP_EOL;
        $this->button->render();
        $this->checkbox->render();
        echo '-----------' . PHP_EOL;
    }
}
