<?php

declare(strict_types=1);

use App\Impl\SalesReport;

require_once __DIR__ . '/../vendor/autoload.php';

$report = new SalesReport();

echo $report->generateLogEntry();
echo '<hr />';
echo $report->exportCsv();
