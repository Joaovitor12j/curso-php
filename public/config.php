<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$config = new App\Impl\Configuration(['db' => 'Banco de dados', 'api' => 'tese_api']);

echo '<hr >';
echo 'Buscando valor de db:' . $config->db;
echo '<hr >';

echo $config;
