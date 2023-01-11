<?php

use PHPUnit\Framework\TestCase;
use CreationalPattern\Mcdonlad;
use CreationalPattern\Chips;
use CreationalPattern\McChicken;

class SimpleFactoryTest extends TestCase
{
    public function testSimpleFactory()
    {
        $mcdonlad = new Mcdonlad();

        $chip = $mcdonlad->getFood("chip");
        $this->assertInstanceOf(Chips::class, $chip);

        $mcChicken = $mcdonlad->getFood("mcChicken");
        $this->assertInstanceOf(McChicken::class, $mcChicken);

        $kfcChicken = $mcdonlad->getFood("kfcChicken");
        $this->assertEquals($kfcChicken, null);
    }
}