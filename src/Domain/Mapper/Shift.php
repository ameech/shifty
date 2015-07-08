<?php
namespace Spark\Project\Domain\Mapper;

use Spark\Project\Domain\Mapper;

class Shift extends Mapper {
    protected $table = 'shifts';

    protected $entity = 'Spark\Project\Domain\Entity\Shift';

    protected function mapObject(array $row)
    {
        return new $this->entity($row['id'], $row['user_id'], $row['start'], $row['end']);
    }
}
