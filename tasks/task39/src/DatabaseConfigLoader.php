<?php

namespace App;

class DatabaseConfigLoader
{
    private $configPath;
    public function __construct($configPath)
    {
        $this->configPath = $configPath;
    }
    public function load($env)
    {
        $configFile = "{$this->configPath}/database.{$env}.json";
        $config = json_decode(file_get_contents($configFile), true);
        if (isset($config['extend'])) {
            $extendedConfig = $this->load($config['extend']);
            $config = array_merge($extendedConfig, $config);
            unset($config['extend']);
        }
        return $config;
    }
}