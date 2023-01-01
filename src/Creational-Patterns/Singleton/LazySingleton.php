<?php

namespace CreationalPattern\Singleton;

class LazySingleton
{
    private static $instance;

    protected function __construct() {}
    protected function __clone() {}
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): LazySingleton
    {
        if (self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}