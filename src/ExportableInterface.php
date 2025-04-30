<?php

declare(strict_types=1);

namespace App;

interface ExportableInterface
{
    public function exportCsv(): string;
}
