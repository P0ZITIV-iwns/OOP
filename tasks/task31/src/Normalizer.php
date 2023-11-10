<?php

namespace App\Normalizer;

function normalize(array $raw): array {
    $normalized = [];

    foreach ($raw as $city) {
        $cityName = strtolower(trim($city['name']));
        $countryName = strtolower(trim($city['country']));

        if (!isset($normalized[$countryName])) {
            $normalized[$countryName] = [];
        }

        if (!in_array($cityName, $normalized[$countryName])) {
            $normalized[$countryName][] = $cityName;
        }
    }

    foreach ($normalized as &$cities) {
        sort($cities);
    }

    ksort($normalized);

    return $normalized;
}