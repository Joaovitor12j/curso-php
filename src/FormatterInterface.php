<?php

declare(strict_types=1);

namespace App;
interface FormatterInterface
{
    public function format(array $data): string;
}
