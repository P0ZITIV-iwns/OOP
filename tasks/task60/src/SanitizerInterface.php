<?php

namespace App;

interface SanitizerInterface
{
    public function sanitize(string $text);
}
