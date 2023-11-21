<?php

namespace App\KeyValueFunctions;

function swapKeyValue($storage)
{
    $data = $storage->toArray();
    $flippedData = array_flip($data);

    foreach ($data as $key => $value) {
        $storage->unset($key);
    }

    foreach ($flippedData as $key => $value) {
        $storage->set($key, $value);
    }
}
