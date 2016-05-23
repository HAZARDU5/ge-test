Test Project
============

Readme by Michael Andrew (michael.andrew@gladeye.co.nz)

## Requirements

*   PHP 5.6.x & PHP-CLI 5.6.x
*   composer
*   MySQL 5.5.x

## Installation

1.  Run `composer install` to install all project dependencies.

2.  Create a local MySQL database and import the `DB_SCHEMA.sql` into it.

3.  Copy the contents of `config.dist.php` to `config.local.php` and set the configuration to suit your environment.

## Running Development Server

1.  Run `php -S localhost:8000` to start the server. Make sure `php` set in your `PATH` points to your PHP 5.6.x binary.

2.  Navigate your browser to http://localhost:8000/ to access the web application.