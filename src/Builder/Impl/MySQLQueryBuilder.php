<?php

declare(strict_types=1);

namespace App\Builder\Impl;

use App\Builder\SQLQueryBuilderInterface;
use stdClass;

final class MySQLQueryBuilder implements SQLQueryBuilderInterface
{

    private object $query;

    public function getSQL(): string
    {
        return $this->query->select .
            ' WHERE ' . implode(' AND ', $this->query->where) .
            ' LIMIT ' . $this->query->limit .
            ';';
    }

    public function getStdClass(): void
    {
        $this->query = new stdClass();
        $this->query->select = '';
        $this->query->where = [];
        $this->query->limit = '';
    }

    public function limit(int $limit): SQLQueryBuilderInterface
    {
        $this->query->limit = $limit;
        return $this;
    }

    public function select(string $table, array $fields): SQLQueryBuilderInterface
    {
        $this->getStdClass();
        $this->query->select = 'SELECT ' . implode(', ', $fields) . ' FROM `' . $table . '`';
        return $this;
    }

    public function where(string $condition): SQLQueryBuilderInterface
    {
        $this->query->where[] = $condition;
        return $this;
    }
}
