<?php

declare(strict_types=1);

use App\AbstractFactory\Impl\Application;
use App\AbstractFactory\Impl\DarkThemeFactory;

require __DIR__ . '/../vendor/autoload.php';

$dark = new DarkThemeFactory();
$app = new Application($dark);

$app->render();
