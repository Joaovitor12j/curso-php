<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Impl\CSVFormatter;
use App\Impl\JsonFormatter;

$myData = [
    'id' => 1,
    //    'name' => 'IXCSoft',
    'course' => 'PHP POO com Docker',
];

$jsonFormatter = new JsonFormatter();

//$formatter = new JsonFormatter();
$formatter = new CSVFormatter();
$formattedContent = $formatter->format($myData);

echo "Dados formatados em CSV:\n";
echo $formattedContent . "\n";

