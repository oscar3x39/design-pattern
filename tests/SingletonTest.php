<?php

use PHPUnit\Framework\TestCase;
use CreationalPattern\Singleton\Singleton;

class SingletonTest extends TestCase
{
    public function testCreateSingletonInstance()
    {
        $instance1 = Singleton::getInstance();
        $instance2 = Singleton::getInstance();
        $this->assertEquals($instance1, $instance2);
    }
}