<?php

namespace App;

class HTMLElement
{
    private $body;

    public function setTextContent($body)
    {
        $this->body = $body;
    }

    public function __toString()
    {
        $params = static::$params;
        $result = "<{$params['name']}";
        return $result .= $params['pair'] ? ">{$this->body}</{$params['name']}>" : '>';
    }
}
