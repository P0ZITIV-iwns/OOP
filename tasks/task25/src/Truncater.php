<?php

namespace App;

class Truncater
{
    const OPTIONS = [
        'separator' => '...',
        'length' => 200,
    ];

    private $config;

    public function __construct($config = [])
    {
        $this->config = array_merge(self::OPTIONS, $config);
    }

    public function truncate($text, $config = [])
    {
        $config = array_merge($this->config, $config);

        if (strlen($text) <= $config['length']) {
            return $text;
        }

        $truncatedText = substr($text, 0, $config['length']);
        if ($config['separator']) {
            $truncatedText .= $config['separator'];
        }

        return $truncatedText;
    }
}