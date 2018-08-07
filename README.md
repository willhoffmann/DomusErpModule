# DomusErpModule

[![GitHub license](https://img.shields.io/github/license/Naereen/StrapDown.js.svg)](https://github.com/willhoffmann/DomusErpModule/blob/master/LICENSE)
[![Build Status](https://travis-ci.org/willhoffmann/DomusErpModule.svg?branch=master&style=flat-square)](https://travis-ci.org/willhoffmann/DomusErpModule)
[![Downloads](https://img.shields.io/packagist/dt/willhoffmann/domuserp-module.svg)](https://packagist.org/packages/willhoffmann/domuserp-module)

ZF3 Module to consume the DomusErp API.

This module uses the [domuserp-php](https://github.com/willhoffmann/domuserp-php "willhoffmann/domuserp-php Package")

## Installation

The suggested installation method is via [composer](https://getcomposer.org/):

```sh
composer require willhoffmann/domuserp-module
```

### Configure module
* Copy `/vendor/willhoffmann/domuserp-module/config/domuserp-module.local.php.dist` into your global autoload folder, remove the dist extension so that Zend Framework picks it up

Or run copy command:

```sh
cp vendor/willhoffmann/domuserp-module/config/domuserp-module.local.php.dist config/autoload/domuserp-module.local.php
```

### Enable module 
Register as Zend Framework module inside your ```config/application.config.php``` file:
```php
// config/application.config.php
return [
    'modules' => [
        'Zend\Router',
        'DomusErpModule',
        'YourApplicationModule',
    ]
],
```
