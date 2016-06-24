# PHP Wrapper for BMTC API


Bangalore Metropolitan Transport Corporation BMTC recently released its Intelligent Transport System (ITS) , But as of now there is no official public api available. This is an approach to build a php wrapper based on the Reverse engineering work done by [**tachyons**](https://github.com/tachyons)

API Reference : https://github.com/tachyons/bmtc-api

## Installation
First enable php-curl extension in apache.

If you are in ubuntu 16.04, type
```bash
sudo apt-get install php-curl
```

Then add this line to the top of your php application

```php
require 'bmtc.php';
```

## Usage

Create a new instance.

```php
$bmtc = new Bmtc();
```

Route wise details.

```php
$result = $bmtc->route_wise('<direction>', '<routeNo>');
```

Route map details.
```php
$result = $bmtc->route_map('<direction>', '<routeNo>');
```
Nearest stop details.

```php
$result = $bmtc->nearest_stop('<lattitude>', '<longitude>');
```
Get stops matching the query string.

```php
$result = $bmtc->search_stop('<keyword>');
```
Get stop details based on Stop ID.

```php
$result = $bmtc->stop_details('<stopId>');
```
Get a trip fare.

```php
$result = $bmtc->trip_fare(<source>, <destination>, <service types>, <number of adults>);
```
Service types can be either
* ordinary
* vajra
* vayu_vajra
* atal_sarige
* nice_service
* bengaluru_darshini

Note: Every methods described above either returns an array of objects or a NULL array.

## Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/tvsijin/bmtc-api-php. This project is intended to be a safe, welcoming space for collaboration, and contributors are expected to adhere to the [Contributor Covenant](http://contributor-covenant.org) code of conduct.


## License

This repository is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).

## Demo

@TODO
