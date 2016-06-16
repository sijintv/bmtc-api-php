# PHP Wraper for BMTC API


Bangalore Metropolitan Transport Corporation BMTC recently released its Intelligent Transport System (ITS) , But as of now there is no official public api available. This is an approch to build a php wraper based on the Reverse engineering work done by [**Aboobacker MK.**](https://github.com/tachyons)

API Reference : https://github.com/tachyons/bmtc_api

## Installation

Add this line to the top of your php application

```php
require 'bmct.php';
```

## Usage

Create a new instance.

```php
$bmct = new Bmct();
```

Nearest bustop.

```php
$bmct->();
```

Buses in a stop.
```php
$bmct->();
```
Get ttmc list

```php
$bmct->();
```
Get route map

```php
$bmct->();
```

Get Trip fare

```php
$bmct->();
```

Service types can be either
* oridninary
* vajra
* vayu_vajra
* atal_sarige
* nice_service
* bengaluru_darshini

## Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/tvsijin/bmtc-api-php. This project is intended to be a safe, welcoming space for collaboration, and contributors are expected to adhere to the [Contributor Covenant](http://contributor-covenant.org) code of conduct.


## License

This repository is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).

## Demo

A demo php application, built based on this api can be found in the demo folder.    
http:///demo.php
