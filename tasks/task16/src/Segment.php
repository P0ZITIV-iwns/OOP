<?php

namespace App;
use App\Point;

class Segment
{
    public $beginPoint;
    public $endPoint;
    public function __construct(Point $beginPoint, Point $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }

    public function getBeginPoint(): Point
    {
        return $this->beginPoint;
    }

    public function getEndPoint(): Point
    {
        return $this->endPoint;
    }

    public function __toString(): string
    {
        return "[{$this->beginPoint}, {$this->endPoint}]";
    }
}