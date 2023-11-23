<?php

namespace App;

class Base
{
    public function isInstanceOf($className)
    {
        $currentClass = get_class($this);

        if ($currentClass === $className) {
            return true;
        }

        $parents = class_parents($this);

        if (in_array($className, $parents)) {
            return true;
        }
        return false;
    }
}
