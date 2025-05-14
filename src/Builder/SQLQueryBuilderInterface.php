<?php

declare(strict_types=1);

namespace App\Builder;

interface SQLQueryBuilderInterface
{
    public function getSQL(): string;

    public function limit(int $limit): self;

    public function select(string $table, array $fields): self;

    public function where(string $condition): self;
}
