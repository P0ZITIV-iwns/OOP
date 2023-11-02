<?php

namespace App;

class Segment
{
    private $beginPoint;
    private $endPoint;
    public function __construct(float $beginPoint, float $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }

    public function getBeginPoint(): float 
    {
        return $this->beginPoint;
    }

    public function getEndPoint(): float 
    {
        return $this->endPoint;
    }
    
}