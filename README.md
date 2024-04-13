# Foodz

Your one-stop shop for fake avatars - but food!

![Static Analysis](https://github.com/bradietilley/faker-foodz/actions/workflows/static.yml/badge.svg)
![Tests](https://github.com/bradietilley/faker-foodz/actions/workflows/tests.yml/badge.svg)


## Introduction

FakerFoodz is a lightweight PHP package designed to generate fake food images that can be used for a variety of purposes, like avatars and other placeholders for web development *paw*poses.

All images are 1024*1024 60% quality JPEGs, resulting in 50-130KB per image.

![example](docs/example.png)


## Repositories

[Imagez](https://github.com/bradietilley/faker-imagez) available:

- [Catz](https://github.com/bradietilley/faker-catz)
- [Foodz](https://github.com/bradietilley/faker-foodz)


## Installation

```
composer require bradietilley/faker-foodz
```


## Documentation

It's insanely easy to use. Just run `foodz()` to spawn the Foodz faker singleton and use a variety of methods from there for fine-tune control:


**Get random paths**

```php
foodz()->path();                             // string: /path/to/pics/food_0037.jpg
foodz()->path();                             // string: /path/to/pics/food_0101.jpg
```

Once all food images are exhausted, it'll refeed and continue again with another random order.


**Get random contents**

```php
foodz()->contents();                         // string: <contents of /path/to/pics/foodz_0087.jpg>
foodz()->contents();                         // string: <contents of /path/to/pics/foodz_0120.jpg>
```


**Get SplFileInfo objects**

```php
foodz()->fileinfo();                         // \SplInfo: <fileinfo of /path/to/pics/foodz_0042.jpg>
foodz()->fileinfo();                         // \SplInfo: <fileinfo of /path/to/pics/foodz_0099.jpg>
```


**Get exact food**

Have a favorite? Get specific ones every time:

```php
foodz()->get(24);                            // string: /path/to/pics/food_0024.jpg
foodz()->get(43);                            // string: /path/to/pics/food_0043.jpg
```

**Get count of food pics**

```php
foodz()->count();                            // integer: 99
```

**Halt iterating for repeat interactions**

```php
foodz()->iterate();                          // Iterates to the next image

foodz()->getCurrentImagePath();              // string: /path/to/pics/foodz_0046.jpeg                 (won't iterate)
foodz()->getCurrentImagePath();              // string: /path/to/pics/foodz_0046.jpeg                 (won't iterate)
foodz()->getCurrentImageContents();          // string: <contents of /path/to/pics/foodz_0046.jpeg>   (won't iterate)
foodz()->getCurrentImageFileinfo();          // \SplFileInfo: /path/to/pics/foodz_0046.jpeg           (won't iterate)
```

**Get all  images**

```php
foodz()->all();                              // array: <path1, path2, ..., path118, path119, path120>

foodz()->path();                             // iterates
foodz()->pool();                             // array: <path1, path2, ..., path118, path119>         (pool contains one less now)

foodz()->path();                             // iterates
foodz()->pool();                             // array: <path1, path2, ..., path118>                  (pool contains one less now)
```

**Pool reloading**

```php
foreach (range(1, 80) as $i) {
    foodz()->path();                         // iterates 80 food pics
}

foodz()->loadWhenEmpty();                    // Won't do anything here as there's still food pics in the pool.
foodz()->load();                             // Will reload the pool of food pics to be the full collection of food images. 
```

## Roadmap

- More pics

## Author

- [Bradie Tilley](https://github.com/bradietilley)
