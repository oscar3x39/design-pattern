<?php

use PHPUnit\Framework\TestCase;
use StructuralPattern\Proxy\HongkongMacSeller;
use StructuralPattern\Proxy\USAMacSeller;

class ProxyTest extends TestCase
{
    public function testProxyUSA()
    {
        $seller = new USAMacSeller();
        $this->expectOutputString(
            "buy a Mac from USA\n",
            $seller->buy()
        );
    }

    public function testProxyHongKong()
    {
        $seller = new HongkongMacSeller();
        $this->expectOutputString(
            "buy a Mac from USA\nbuy a Mac from HongKong\n",
            $seller->buy()
        );
    }
}