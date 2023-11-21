<?php

namespace App\HTML;

function getLinks($tags): array {
    $links = [];
    foreach ($tags as $tag) {
        if (isset($tag['name'])) {
            switch ($tag['name']) {
                case 'img':
                    if (isset($tag['src'])) {
                        $links[] = $tag['src'];
                    }
                    break;
                case 'a':
                    if (isset($tag['href'])) {
                        $links[] = $tag['href'];
                    }
                    break;
                case 'link':
                    if (isset($tag['href'])) {
                        $links[] = $tag['href'];
                    }
                    break;
                default:
                    break;
            }
        }
    }
    return $links;
}