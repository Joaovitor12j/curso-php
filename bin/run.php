<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Impl\Example;

$example = new Example();

$name = $argv[1] ?? 'mundo via console';

$message = $example->greet($name);

echo $message . PHP_EOL;
echo 'Script executado via CLI em ' . date('Y-m-d H:i:s') . PHP_EOL;
