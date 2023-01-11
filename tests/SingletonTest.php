<?php

use PHPUnit\Framework\TestCase;
use CreationalPattern\LazySingleton;

class SingletonTest extends TestCase
{
    public function testLazySingleton()
    {
        $instance1 = LazySingleton::getInstance();
        $instance2 = LazySingleton::getInstance();
        $this->assertEquals($instance1, $instance2);
    }
}