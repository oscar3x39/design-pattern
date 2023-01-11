<?php

use PHPUnit\Framework\TestCase;
use CreationalPattern\FactoryMethod\Dicos;
use CreationalPattern\FactoryMethod\KFC;
use CreationalPattern\FactoryMethod\Mcdonald;

class FactoryMethodTest extends TestCase
{
    public function testFactoryMethod()
    {
        $store = new Dicos();
        $dicos = $store->getChips()->eat();
        $this->assertEquals($dicos, "DicosChips");

        $store = new KFC();
        $kfc = $store->getChips()->eat();
        $this->assertEquals($kfc, "KFCChips");

        $store = new Mcdonald();
        $mcdonald = $store->getChips()->eat();
        $this->assertEquals($mcdonald, "MCchips");
    }
}