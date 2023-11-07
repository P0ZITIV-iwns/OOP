<?php

namespace App;

class Point 
{
    public static $table = 'points';

    public function getTable(): string
    {
        return self::$table;
    }
}