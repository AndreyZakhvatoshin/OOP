<?php

namespace App\Models;

use App\Models\Database;

class Posts
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function all(string $table): array
    {
        return $this->db->all($table);
    }

    public function store(string $table, array $data)
    {
        $this->db->create($table, $data);
    }

    public function show(string $table, int $id)
    {
        return $this->db->find($table, $id);
    }
}
