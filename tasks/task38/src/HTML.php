<?php

namespace App\HTML;

function stringify($tag) {
    $name = $tag['name'];
    $tagType = $tag['tagType'];
    $body = $tag['body'] ?? '';
    $attributes = collect($tag)
            ->except(['name', 'tagType', 'body'])
            ->map(fn($value, $key) => "$key=\"$value\"")
            ->implode(' ');
    switch ($tag['tagType']) {
        case 'single':
            return "<$name" . ($attributes ? " " : "") . $attributes . ">";
        case 'pair':
            return "<$name" . ($attributes ? " " : "") . $attributes . ">" . $body . "</$name>";
    }
}