<?php

use App\Impl\CSVFormatter;

require_once __DIR__ . '/../vendor/autoload.php';

$myData = [
    'id' => 1,
    //  'name' => 'IXCSoft',
    'course' => 'PHP POO com Docker teste',
];

//$formatter = new JsonFormatter();
$formatter = new CSVFormatter();
$formattedContent = $formatter->format($myData);

echo "Dados formatados:<br />";
echo $formattedContent . "\n";

