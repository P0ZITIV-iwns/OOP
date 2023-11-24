<?php

namespace App;

class SanitizerStripTagsDecorator implements SanitizerInterface
{
    private $baseSanitizer;

    public function __construct(SanitizerInterface $baseSanitizer)
    {
        $this->baseSanitizer = $baseSanitizer;
    }

    public function sanitize(string $text)
    {
        return $this->baseSanitizer->sanitize(strip_tags($text));
    }
}