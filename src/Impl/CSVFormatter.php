<?php

declare(strict_types=1);

namespace App\Impl;

final class CSVFormatter extends AbstractFormatter
{
    public function format(array $data): string
    {
        $header = array_keys($data);
        $csvOutput = implode(',', $header) . PHP_EOL;
        $values = array_values($data);
        $csvOutput .= implode(',', $values);
        return $csvOutput;
    }

}
