<?php

namespace App\Models;

use PDO;
use Aura\SqlQuery\QueryFactory;

class Posts
{
    private $db;
    private $queryFactory;

    public function __construct(PDO $db, QueryFactory $queryFactory)
    {
        $this->db = $db;
        $this->queryFactory = $queryFactory;
    }

    public function all()
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(["*"])
            ->from('posts');
        $sth = $this->db->prepare($select->getStatement());
        $sth->execute($select->getBindValues());
        $myPosts = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $myPosts;
    }
    public function add()
    {
    }
}
