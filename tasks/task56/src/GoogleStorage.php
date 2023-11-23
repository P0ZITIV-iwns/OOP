<?php

namespace App;

class GoogleStorage implements StorageInterface
{
    private $elements = [];

    public function set($key, $value)
    {
        return $this->elements[$key] = $value;
    }

    public function get($key)
    {
        return $this->elements[$key];
    }

    public function count()
    {
        throw new \Exception();
    }
}
