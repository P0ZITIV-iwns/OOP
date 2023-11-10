<?php

namespace App;

class Random
{
    private $seed;
    public function __construct($seed)
    {
        $this->seed = $seed;
    }

    public function getNext()
    {
        return $this->seed = ($this->seed * 1103515245 + 12345) % 32768;
    }

    public function reset()
    {
        $this->seed = 100;
    }
}