<?php

namespace App;

class Square
{
    private $side;

    public function __construct(int $side)
    {
        $this->side = $side;
    }

    public function getSide(): int
    {
        return $this->side;
    }
}