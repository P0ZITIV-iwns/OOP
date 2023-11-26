<?php

namespace App\Safe;

function json_decode(string $json, bool $assoc = false, int $depth = 512, $options = 0)
{
    $decoded = \json_decode($json, $assoc, $depth, $options);

    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new \Exception();
    }

    return $decoded;
}