<?php

namespace App\KeyValueFunctions;

function swapKeyValue($objectDatabase)
{
    $flippedObjectDatabase = array_flip($objectDatabase->toArray());

    foreach ($objectDatabase as $key => $value) {
        $storage->unset($key);
    }

    foreach ($flippedObjectDatabase as $key => $value) {
        $objectDatabase->set($key, $value);
    }
}
