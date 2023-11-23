<?php

namespace App;

class HTMLPairElement extends HTMLElement
{
    protected $textContent = '';
    public function __toString()
    {
        $tagName = $this->tag;
        $attrLine = $this->stringifyAttributes();
        $textContent = $this->getTextContent();
        return "<{$tagName}{$attrLine}>{$textContent}</{$tagName}>";
    }

    public function getTextContent()
    {
        return $this->textContent;
    }

    public function setTextContent(string $body)
    {
        $this->textContent = $body;
    }
}
