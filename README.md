# Customize laravel make command
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/mrkatz/laravel-stubs.svg?maxAge=0)](https://packagist.org/packages/mrkatz/laravel-stubs)
[![Packagist Version](https://img.shields.io/packagist/v/mrkatz/laravel-stubs.svg?maxAge=0)](https://packagist.org/packages/mrkatz/laravel-stubs)
[![Packagist Stats](https://poser.pugx.org/mrkatz/laravel-stubs/downloads)](https://packagist.org/packages/mrkatz/laravel-stubs/stats)


The package allows customization of the Artisan commands like `artisan make:model`, `artisan make:controller` and other, just as you need. 

Any location of the generated classes and with any content.


## Installation
You can get library through [composer](https://getcomposer.org/)

```
composer require mrkatz/laravel-stubs
```

To publish the config file to `config/stubs.php` run:

```
php artisan vendor:publish --provider="Mrkatz\LaravelStubs\Providers\ConsoleSupportServiceProvider"
```

Done!


## Usage

### Configure paths for generated classes
To change the paths of saving the generated classes, you need to configure their namespaces in a configuration file `config/stubs.php`.

### Modular development.
If you have a large project, you may want to divide it into modules as subdirectories in the "app" directory.

To make classes inside the module you are developing, you can specify the name of the module in the `STUBS_MODULE` environment variable.

### Publish stub files for edit
```
php artisan stubs:publish
```

The files will be placed in the directory `resources/stubs` (or other directory if you change it in the configuration file).

Now you can edit any of the stubs and enjoy your customized commands like `artisan make:model`,` artisan make:controller` and others.


## License
[MIT](LICENSE)