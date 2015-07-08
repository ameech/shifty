<?php
namespace Spark\Project\Transformer;

use League\Fractal\TransformerAbstract;

class Shift extends TransformerAbstract {

    public function transform(\Spark\Project\Domain\Entity\Shift $shift)
    {
        return [
            'id'      => (int)$shift->getShiftID(),
            'user_id' => (int)$shift->getUserID(),
            'start'   => $shift->getStart(),
            'end'     => $shift->getEnd(),
        ];
    }
}
