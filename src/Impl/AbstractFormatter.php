<?php

declare(strict_types=1);

namespace App\Impl;

use App\FormatterInterface;
use InvalidArgumentException;

abstract class AbstractFormatter implements FormatterInterface
{
    private const KEYS_VALIDATE = ['id', 'name', 'course'];

    public function format(array $data): string
    {
        array_map(
            static function (string $key) use ($data): void {
                if (array_key_exists($key, $data) === false) {
                    throw new InvalidArgumentException('Invalid key: ' . $key);
                }
            },
            self::KEYS_VALIDATE
        );
        return '';
    }
}
