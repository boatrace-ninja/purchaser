# Boatrace Ninja Purchaser

[![Latest Stable Version](https://poser.pugx.org/boatrace-ninja/purchaser/v/stable)](https://packagist.org/packages/boatrace-ninja/purchaser)
[![Latest Unstable Version](https://poser.pugx.org/boatrace-ninja/purchaser/v/unstable)](https://packagist.org/packages/boatrace-ninja/purchaser)
[![License](https://poser.pugx.org/boatrace-ninja/purchaser/license)](https://packagist.org/packages/boatrace-ninja/purchaser)

## Installation
```
$ composer require boatrace-ninja/purchaser
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Ninja\Purchaser;

Purchaser::setDepositAmount(1000)
    ->setSubscriberNumber('xxxxxxxx')
    ->setPersonalIdentificationNumber('xxxx')
    ->setAuthenticationPassword('xxxxxx')
    ->setPurchasePassword('xxxxxx')
    ->purchase(24, 12, [123, 124, 125, 126]);
```

## Testing
```
$ npm install selenium-standalone --save-dev
$ npx selenium-standalone install
$ npx selenium-standalone start
$ ./vendor/bin/phpunit
```

## License
The Boatrace Ninja Purchaser is open source software licensed under the [MIT license](LICENSE).
