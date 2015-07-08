<?php
namespace Spark\Project\Domain\Entity;

class Shift {

    private $id;

    protected $user_id;

    protected $start;

    protected $end;

    public function __construct($id, $user_id, $start, $end)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->setStart($start);
        $this->setEnd($end);
    }

    public function setStart($start)
    {
        $this->start = $start;
    }

    public function setEnd($end)
    {
        $this->end = $end;
    }

    public function getShiftID()
    {
        return $this->id;
    }

    public function getUserID()
    {
        return $this->user_id;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getEnd()
    {
        return $this->end;
    }
}