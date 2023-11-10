<?php

namespace App;

class Url
{
    private $urlString;

    public function __construct(string $url)
    {
        $this->urlString = $url;
    }

    public function getScheme(): string
    {
        return parse_url($this->urlString, PHP_URL_SCHEME);
    }

    public function getHostName(): string
    {
        return parse_url($this->urlString, PHP_URL_HOST);
    }

    public function getQueryParams(): array
    {
        parse_str(parse_url($this->urlString, PHP_URL_QUERY), $query);
        return $query;
    }

    public function getQueryParam(string $name, $default = null)
    {
        $params = $this->getQueryParams();
        return $params[$name] ?? $default;
    }

    public function equals(Url $url): bool
    {
        return $this->urlString === $url->urlString;
    }
}
