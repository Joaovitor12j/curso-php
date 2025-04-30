<?php

declare(strict_types=1);

namespace App\Impl;

use InvalidArgumentException;

final class Configuration
{
    private array $configData;


    public function __construct(array $configData)
    {
        $this->configData = $configData;
        echo 'Configuration loaded!';
    }

    public function __get(string $name)
    {
        if (isset($this->configData[$name])) {
            return $this->configData[$name];
        }
        throw new InvalidArgumentException(
            sprintf('Invalid configuration key: %s', $name)
        );
    }

    public function __toString(): string
    {
        return 'Aqui estão as configurações: ' . json_encode($this->configData);
    }
}
