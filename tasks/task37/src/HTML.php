<?php

namespace App\HTML;

function getLinks($tags): array {
    $links = [
        'img' => fn ($tag) => $tag['src'],
        'a' => fn ($tag) => $tag['href'],
        'link' => fn ($tag) => $tag['href'],
    ];

    return collect($tags)
        ->filter(fn ($tag) => in_array($tag['name'], array_keys($links)))
        ->map(fn ($tag) => $links[$tag['name']]($tag))
        ->values()
        ->all();
}