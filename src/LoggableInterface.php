<?php

declare(strict_types=1);

namespace App;

interface LoggableInterface
{
    public function generateLogEntry(): string;
}
