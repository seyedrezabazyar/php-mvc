<?php

namespace App\Models\Contracts;

class JsonBaseModel extends BaseModel
{
    private $db_folder;
    private $table_filepath;

    public function __construct()
    {
        $this->db_folder = BASEPATH . '/storage/jsondb/';
        $this->table_filepath = $this->db_folder . $this->table . '.json';
    }

    private function read_table(): array
    {
        $table_data = json_decode(file_get_contents($this->table_filepath));
        return $table_data;
    }

    private function write_table(array $data)
    {
        $data_json = json_encode($data);
        file_put_contents($this->table_filepath, $data_json);
    }

    # Create (insert)
    public function create(array $new_data): int
    {
        $table_data = $this->read_table($new_data);
        $table_data[] = $new_data;
        $this->write_table($table_data);
        return 1;
    }

    # Read (select) single | multiple
    public function find($id): object
    {
        return (object)[];
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
