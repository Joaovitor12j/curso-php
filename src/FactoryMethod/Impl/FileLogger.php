<?php

namespace App\FactoryMethod\Impl;

use App\FactoryMethod\LoggerInterface;

final class FileLogger implements LoggerInterface
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
        if (! is_dir(dirname($this->filePath))) {
            mkdir(dirname($this->filePath), 0777, true);
        }
    }

    public function log(string $message): void
    {
        $date = date('Y/m/d H:i:s');
        $message = sprintf(
                '[%s]FileLogger: %s',
                $date,
                $message
            ) . PHP_EOL;
        file_put_contents($this->filePath, $message, FILE_APPEND);
        echo $message . PHP_EOL;
    }
}
