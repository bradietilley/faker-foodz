<?php

use BradieTilley\FakerFoodz\Foodz;
use Illuminate\Support\Collection;

test('foodz helper function loads a singleton instance of Foodz', function () {
    expect(foodz())->toBeInstanceOf(Foodz::class);
    expect(foodz())->toBe(foodz());
});

test('foodz can load all cat pics', function () {
    $min = 1;
    $max = 99;

    $expect = Collection::range($min, $max)
        ->map(fn (int $i) => 'food_'.str_pad($i, 4, '0', STR_PAD_LEFT).'.jpg')
        ->map(fn (string $name) => Foodz::absolutePath($name))
        ->values()
        ->all();

    /**
     * All is representative of what's in the pics directory
     */
    $actual = foodz()->all();
    expect($actual)->toBe($expect);
});
