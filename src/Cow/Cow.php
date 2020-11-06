<?php


namespace MyApp\Cow;


use MyApp\Grass\Grass;

class Cow
{
    public function eat(Grass $food)
    {
        return 'mmm ' . $food->getFoodType();
    }
}