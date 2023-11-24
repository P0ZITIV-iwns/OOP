<?php

namespace App;

class Base
{
    public function isInstanceOf($className)
    {
        return (get_class($this) === $className || in_array($className, class_parents($this)));
    }
}
