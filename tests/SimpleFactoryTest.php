<?php

use PHPUnit\Framework\TestCase;
use CreationalPattern\SimpleFactory\Mcdonlad;
use CreationalPattern\SimpleFactory\Chips;
use CreationalPattern\SimpleFactory\McChicken;

class SimpleFactoryTest extends TestCase
{
    public function testSimpleFactory()
    {
        $mcdonlad = new Mcdonlad();

        $chip = $mcdonlad->getFood("chip");
        $this->assertInstanceOf(Chips::class, $chip);

        $mcChicken = $mcdonlad->getFood("mcChicken");
        $this->assertInstanceOf(McChicken::class, $mcChicken);

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('we\'re not support this food');
        $kfcChicken = $mcdonlad->getFood("kfcChicken");
    }
}