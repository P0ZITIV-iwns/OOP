<?php

namespace App\HTML;

function stringify($tag) {
    $name = $tag['name'];
    $tagType = $tag['tagType'];
    $body = $tag['body'] ?? '';
    $attributes = collect($tag)
            ->except(['name', 'tagType', 'body'])
            ->map(fn($value, $key) => " $key=\"$value\"")
            ->implode('');
    if ($tagType === 'single') {
        return "<$name$attributes>";
    }
    return "<$name$attributes>$body</$name>";
}