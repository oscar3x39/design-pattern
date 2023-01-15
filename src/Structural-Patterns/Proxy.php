<?php

namespace StructuralPattern\Proxy;

interface IMacSeller
{
    function buy();
}

class USAMacSeller implements IMacSeller
{
    public function buy()
    {
        echo "buy a Mac from USA".PHP_EOL;
    }
}

class HongkongMacSeller implements IMacSeller
{
    private $seller;

    public function __construct()
    {
        $this->seller = new USAMacSeller();
    }

    public function buy()
    {
        $this->seller->buy();
        echo "buy a Mac from HongKong".PHP_EOL;
    }
}