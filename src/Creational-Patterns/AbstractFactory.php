<?php

namespace CreationalPattern\AbstractFactory;

interface IStore
{
    function getChips();
    function getChicken();
}

interface IChicken
{
    function eat();
}

interface IChips
{
    function eat();
}

class OrleanChicken implements IChicken
{
    public function eat()
    {
        return "OrleanChicken";
    }
}

class McChicken implements IChicken
{
    public function eat()
    {
        return "McChicken";
    }
}

class HandGunChicken implements IChicken
{
    public function eat()
    {
        return "HandGunChicken";
    }
}

class KFCChips implements IChips
{
    public function eat()
    {
        return "KFCChips";
    }
}

class MCchips implements IChips
{
    public function eat()
    {
        return "MCchips";
    }
}

class DicosChips implements IChips
{
    public function eat()
    {
        return "DicosChips";
    }
}

class KFC implements IStore
{
    public function getChips()
    {
        return KFCChips();
    }

    public function getChicken()
    {
        return new OrleanChicken();
    }
}

class Mcdonald implements IStore
{
    public function getChips()
    {
        return new MCchips();
    }

    public function getChicken()
    {
        return new McChicken();
    }
}

class Dicos implements IStore
{
    public function getChips()
    {
        return new DicosChips();
    }

    public function getChicken()
    {
        return new HandGunChicken();
    }
}