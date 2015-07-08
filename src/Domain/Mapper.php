<?php
namespace Spark\Project\Domain;

abstract class Mapper {

    private $db;

    protected $table;

    protected $entity;

    public function __construct(\FluentPDO $db)
    {
        $this->db = $db;
    }

    protected function db()
    {
        return $this->db;
    }

    public function findAll()
    {
        $records = [];

        foreach($this->db()->from($this->table) as $row) {
            $records[] = $this->mapObject($row);
        }

        return $records;
    }

    abstract protected function mapObject(array $row);
}