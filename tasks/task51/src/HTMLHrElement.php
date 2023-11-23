<?php

namespace App;

class HTMLHrElement extends HTMLElement 
{
    public function __toString()
    {
        $attrLine = $this->stringifyAttributes();
        return "<hr{$attrLine}>";
    }
}
