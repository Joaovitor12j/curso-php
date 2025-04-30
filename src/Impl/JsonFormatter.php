<?php

declare(strict_types=1);

namespace App\Impl;

use App\FormatterInterface;

final class JsonFormatter extends AbstractFormatter implements FormatterInterface
{
    public function format(array $data): string
    {
        $this->format($data);
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
