<?php

namespace CreationalPattern\FactoryMethod;

interface IChips
{
    function eat();
}

class MCchips implements IChips
{
    public function eat()
    {
        return "MCchips";
    }
}

class KFCChips implements IChips
{
    public function eat()
    {
        return "KFCChips";
    }
}

class DicosChips implements IChips
{
    public function eat()
    {
        return "DicosChips";
    }
}

interface IStore
{
    function getChips();
}

class Mcdonald implements IStore
{
    function getChips()
    {
        return new MCchips();
    }
}

class KFC implements IStore
{
    function getChips()
    {
        return new KFCChips();
    }
}

class Dicos implements IStore
{
    function getChips()
    {
        return new DicosChips();
    }
}