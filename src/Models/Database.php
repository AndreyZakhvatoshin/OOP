<?php

namespace App\Models;

use Aura\SqlQuery\QueryFactory;
use PDO;

class Database
{
    private $queryFactory;
    private $pdo;

    public function __construct(QueryFactory $queryFactory, PDO $pdo)
    {
        $this->queryFactory = $queryFactory;
        $this->pdo = $pdo;
    }

    public function all($table, $limit = null)
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['*'])
            ->from($table)
            ->limit($limit);
        $sth = $this->pdo->prepare($select->getStatement());
        $sth->execute($select->getBindValues());
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($table, $id)
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['*'])
            ->from($table)
            ->where('id = :id')
            ->bindValue('id', $id);

        $sth = $this->pdo->prepare($select->getStatement());
        $sth->execute($select->getBindValues());
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    public function create($table, $data)
    {
        $insert = $this->queryFactory->newInsert();
        $insert->into($table)
            ->cols($data);

        $sth = $this->pdo->prepare($insert->getStatement());
        $sth->execute($insert->getBindValues());
    }

    public function update($table, $id, $data)
    {
        $update = $this->queryFactory->newUpdate();
        $update->table($table)
            ->cols($data)
            ->where('id = :id')
            ->bindValue('id', $id);
        $sth = $this->pdo->prepare($update->getStatement());
        $sth->execute($update->getBindValues());
    }

    public function delete($table, $id)
    {
        $delete = $this->queryFactory->newDelete();
        $delete->from($table)
            ->where('id = :id')
            ->bindValue('id', $id);
        $sth = $this->pdo->prepare($delete->getStatement());
        $sth->execute($delete->getBindValues());
    }
}
