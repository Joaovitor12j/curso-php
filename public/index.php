<?php

declare(strict_types=1);

use App\AbstractFactory\Impl\Application;
use App\AbstractFactory\Impl\DarkThemeFactory;
use App\AbstractFactory\Impl\LightThemeFactory;

require __DIR__ . '/../vendor/autoload.php';

$dark = new DarkThemeFactory();
$light = new LightThemeFactory();
$app = new Application($light);

$app->render();
