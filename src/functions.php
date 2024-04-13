<?php

use BradieTilley\FakerFoodz\Foodz;

if (!function_exists('foodz')) {
    function foodz(): Foodz
    {
        return Foodz::instance();
    }
}
