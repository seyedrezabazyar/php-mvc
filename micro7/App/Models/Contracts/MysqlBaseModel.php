<?php

namespace App\Models\Contracts;

class MysqlBaseModel extends BaseModel
{
    protected function __construct()
    {
        try {
            $this->connection = new \PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASS']);
            $this->connection->exec("set names utf8;");
            echo 'OK';
        } catch (PDOException $e) {
            // throw $e;
            echo 'connection error: ' . $e->getMessage();
        }

    # Create (insert)
    public function create(array $new_data): int
    {
        return 1;
    }

    # Read (select) single | multiple
    public function find($id): object
    {
        return (object)null;
    }

    public function getAll(): array
    {
        return [];
    }

    public function get(array $columns, array $where): array
    {
        return [];
    }

    # Update records
    public function update(array $data, array $where): int
    {
        return 1;
    }

    # Delete
    public function delete(array $where): int
    {
        return 1;
    }
    }
}
