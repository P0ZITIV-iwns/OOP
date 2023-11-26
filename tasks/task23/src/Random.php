<?php

namespace App;

class Random
{
    const RAND_MAX = 32767;
    const A = 1103515245;
    const B = 12345;
    const C = 65536;
    private $seed;
    private int $next;

    public function __construct(int $seed)
    {
        $this->seed = $seed;
        $this->next = $seed;
    }

    public function getNext()
    {
        $this->next = intval($this->next * self::A + self::B);
        return intval($this->next / self::C) % (self::RAND_MAX + 1);
    }

    public function reset(): void
    {
        $this->next = $this->seed;
    }
}