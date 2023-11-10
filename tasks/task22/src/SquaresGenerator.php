<?php

namespace App;

class SquaresGenerator
{
    public static function generate($side, $count = 5)
    {
        $squares = [];
        for ($i = 0; $i < $count; $i++) {
            $squares[] = new Square($side);
        }
        return $squares;
    }
}
