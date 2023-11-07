<?php

namespace App;

interface ComparableInterface
{
    public function compareTo($user): bool;
}

class User implements ComparableInterface
{
    private $id;
    private $name;
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;        
    }
    public function compareTo($user): bool
    {
        return $this->id === $user->id;
    }
}