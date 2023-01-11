<?php

namespace CreationalPattern\SimpleFactory;

interface IFood
{
    public function eat();
}

class Chips implements IFood
{
    public function eat()
    {
        echo "I ate Chips";
    }
}

class McChicken implements IFood
{
    public function eat()
    {
        echo "I ate McChicken";
    }
}

class Mcdonlad
{
    public function getFood(String $name)
    {
        switch ($name) {
            case "chip":
                return new Chips();
            case "mcChicken":
                return new McChicken();
            default:
                throw new \Exception("we're not support this food");
        }
    }
}