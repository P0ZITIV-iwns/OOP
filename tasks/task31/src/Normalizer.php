<?php

namespace App\Normalizer;

function normalize(array $cities): array {
    return collect($cities)
        ->mapToGroups(fn ($item) => [trim(strtolower($item['country'])) => trim(strtolower($item['name']))])
        ->map(fn ($item) => collect($item)->unique()->sort()->values())->toArray();
}