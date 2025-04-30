<?php

declare(strict_types=1);

namespace App\Impl;

use App\ExportableInterface;
use App\LoggableInterface;

final class SalesReport implements ExportableInterface, LoggableInterface
{
    public function exportCsv(): string
    {
        return 'exportou para csv';
    }

    public function generateLogEntry(): string
    {
        return 'gerou log';
    }
}
