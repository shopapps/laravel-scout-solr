# NOTE: I NO LONGER USE THIS PLEASE TRY laravel-scout-solr-engine INSTEAD

https://github.com/shopapps/laravel-scout-solr-engine










# Solr Driver for Laravel Scout
Solr driver for Laravel Scout. (Updated for Laravel 10)
## Documentation

Not ready yet.

## Problems, questions or comments?

If you have **any** problems, questions or comments, feel free to submit an [issue](link-issue) and I will reply to you as soon as possible.

## Prerequisites

Install [Laravel Scout](https://laravel.com/docs/10.x/scout.

## Install

Install via Composer

``` bash
$ composer require shopapps/laravel-scout-solr
```

Set your SCOUT_DRIVER to solr:

```
// .env

...

SCOUT_DRIVER=solr
```


You must add the Scout service provider and the Solr engine service provider in your app.php config:

```
// config/app.php

'providers' => [
    ...
        /*
         * Package Service Providers...
         */
        Laravel\Scout\ScoutServiceProvider::class,
        ScoutEngines\Solr\SolrProvider::class,
],
```

Add the Solr configuration to the scout config file:

```php
// config/scout.php

...

    /*
    |--------------------------------------------------------------------------
    | Solr Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your Solr settings. Solr is the popular, blazing
    | -fast, open source enterprise search platform built on Apache Lucene.
    | If necessary, you can override the configuration in your .env file.
    |
    */

    'solr' => [
        'host' => env('SOLR_HOST', '127.0.0.1'),
        'port' => env('SOLR_PORT', '8983'),
        'path' => env('SOLR_PATH', '/solr/'),
        'core' => env('SOLR_CORE', 'scout'),
    ],
```

## Usage

Now you can use Laravel Scout as described in the [official documentation](https://laravel.com/docs/10.x/scout#main-content)

## Solr Installation

Visit the SOLR website https://solr.apache.org/ to install a SOLR server for your platform


## Security

If you discover any security related issues, please send me email instead of using the issue tracker.

## Credits

- [Semih YILMAZ][link-author]
- [Jeroen Herczeg]
- [solariumphp/solarium](https://github.com/solariumphp/solarium)
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

