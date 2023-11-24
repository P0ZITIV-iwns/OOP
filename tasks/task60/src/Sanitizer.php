<?php

namespace App;

class Sanitizer implements SanitizerInterface
{
    public function sanitize(string $text)
    {
        return trim($text);
    }
}
