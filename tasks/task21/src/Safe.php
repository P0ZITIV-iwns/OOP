<?php

namespace App\Safe;

function json_decode($json, $assoc = false, $depth = 512, $options = 0)
{
    $decoded = \json_decode($json, $assoc, $depth, $options);

    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new \Exception('JSON decoding error: ' . json_last_error_msg());
    }

    return $decoded;
}