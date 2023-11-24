<?php

namespace App;

class HTMLImgElement extends HTMLElement
{
    private const ATTRIBUTE_NAMES = ['src'];

    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }

    public function isValid()
    {
        return empty(array_diff(array_keys($this->getAttributes()), self::getAttributeNames()));
    }
}
