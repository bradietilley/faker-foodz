# Foodz

Food image faker for PHP.

![Static Analysis](https://github.com/bradietilley/faker-foodz/actions/workflows/static.yml/badge.svg)
![Tests](https://github.com/bradietilley/faker-foodz/actions/workflows/tests.yml/badge.svg)


## Introduction

FakerFoodz is a lightweight PHP package designed to generate fake food images that can be used for a variety of purposes, like avatars and other placeholders.

All images are 1024*1024 60% quality JPEGs, resulting in 50-130KB per image.

![example](docs/example.png)


## Repositories

[Imagez](https://github.com/bradietilley/faker-imagez) available:

- [Catz](https://github.com/bradietilley/faker-catz)
- [Dogz](https://github.com/bradietilley/faker-dogz)
- [Foodz](https://github.com/bradietilley/faker-foodz) You are here.


## Installation

```
composer require bradietilley/faker-foodz
```


## Documentation

The documentation for this is the same as the base [Imagez](https://github.com/bradietilley/faker-imagez) documentation, except instead of `imagez()` you'll need to use `foodz()`.


**Quick example:**

```php
foodz()->path();                             // string path: /path/to/pics/food_0037.jpg
foodz()->path();                             // string path: /path/to/pics/food_0101.jpg
foodz()->all();                              // array of string paths
```


## Author

- [Bradie Tilley](https://github.com/bradietilley)
