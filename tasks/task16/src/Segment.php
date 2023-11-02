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

    public function __toString(): string
    {
        return "[(x: {$this->beginPoint->x}, y: {$this->beginPoint->y}), (x: {$this->endPoint->x}, y: {$this->endPoint->y})]";
    }
}