<?php

namespace App\Converter;

function toStd($array)
{
    $std = new \stdClass();

    foreach ($array as $key => $value) {
        $std->$key = $value;
    }

    return $std;
}