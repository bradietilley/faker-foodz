<?php

namespace BradieTilley\FakerFoodz;

use BradieTilley\FakerImagez\Imagez;

class Foodz extends Imagez
{
    public static function basePath(): string
    {
        return dirname(__DIR__).DIRECTORY_SEPARATOR.'pics';
    }
}
