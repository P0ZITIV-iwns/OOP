<?php

namespace App;

class Time
{
    private $h;
    private $m;

    public function __construct($h, $m)
    {
        $this->h = $h;
        $this->m = $m;
    }

    public static function fromString($timeString): Time
    {
        $timeArray = explode(":", $timeString);
        return new Time($timeArray[0], $timeArray[1]);
    }

    public function __toString(): string
    {
        return "{$this->h}:{$this->m}";
    }
}