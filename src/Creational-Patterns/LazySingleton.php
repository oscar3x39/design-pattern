<?php

namespace CreationalPattern;

class LazySingleton
{
    private static $instance;

    protected function __construct() {}
    protected function __clone() {}
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance()
    {
        if (self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}