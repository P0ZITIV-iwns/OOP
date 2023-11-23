<?php

namespace App;

class HTMLElement
{
    private $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAttribute(string $key)
    {
        return $this->attributes[$key] ?? null;
    }

    protected function getClassArray()
    {
        return explode(' ', $this->attributes['class'] ?? '');
    }

    protected function setClassArray($classArray)
    {
        $this->attributes['class'] = implode(' ', $classArray);
    }

    public function addClass($className)
    {
        $classArray = $this->getClassArray();
        if (!in_array($className, $classArray)) {
            $classArray[] = $className;
            $this->setClassArray($classArray);
        }
    }

    public function removeClass($className)
    {
        $classArray = $this->getClassArray();
        $classArray = array_diff($classArray, [$className]);
        $this->setClassArray($classArray);
    }

    public function toggleClass($className)
    {
        $classArray = $this->getClassArray();
        if (in_array($className, $classArray)) {
            $classArray = array_diff($classArray, [$className]);
        } else {
            $classArray[] = $className;
        }
        $this->setClassArray($classArray);
    }
}
