<?php

use PHPUnit\Framework\TestCase;
use CreationalPattern\AbstractFactory\Dicos;
use CreationalPattern\AbstractFactory\KFC;
use CreationalPattern\AbstractFactory\Mcdonald;

class AbstractFactoryTest extends TestCase
{
    public function testAbstractFactory()
    {
        $store = new Dicos();
        $this->assertEquals(
            $store->getChicken()->eat(),
            "HandGunChicken"
        );
        $this->assertEquals(
            $store->getChips()->eat(),
            "DicosChips"
        );

        // $store = new KFC();

        // $store = new Mcdonald();
    }
}