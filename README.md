laravel-psysh
=============

An alternative shell for Laravel using PsySH

Installation
------------

Add the package to your `composer.json` and run `composer update`.

    {
        "require": {
            "ahmadsherif/laravel-psysh": "dev-master"
        }
    }

Add the service provider in `app/config/app.php`:

    'LaravelPsySH\PsySHServiceProvider',

Usage
-----

Just like any other Laravel command, type in your shell

    $ php artisan psysh

Presenters Available
--------------------

* Eloquent, displays model attributes instead of instance properties

License
-------
This package is released under the MIT license.
