<?php

namespace App;

class HTMLButtonElement extends HTMLElement
{
    private const ATTRIBUTE_NAMES = ['type'];
    private const TYPE_NAMES = ['button', 'submit', 'reset'];

    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }

    public function isValid()
    {
        $attributes = $this->getAttributes();

        return empty(array_diff(array_keys($attributes), self::getAttributeNames())) && (isset($attributes['type']) && in_array($attributes['type'], self::TYPE_NAMES));
    }
}
