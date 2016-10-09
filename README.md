# CakePHP Application Skeleton

This is a fork from [https://github.com/PilOop/cakephp3-auth-acl-bootstrap-adminlte](https://github.com/PilOop/cakephp3-auth-acl-bootstrap-adminlte)
Work in progress, updating some code.. don't use this fork, as it hasn't finshed yet.. use the original one..

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.0.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer install`.

If Composer is installed globally, run
```bash
composer install
```

You should now be able to visit the path to where you installed the app and see
the setup traffic lights.

## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.

## Creating tables

To create ACL related tables, run the following Migrations command:

```bash
bin/cake migrations migrate
```

## Seeding your database

```bash
bin/cake migrations seed
```

## Access

`administrator` role account
```
Login: admin
Password: admin
```

`manager` role account
```
Login: ***
Password: ***
```

`user` role account
```
Login: client
Password: client
```

## Info

Author: Kévin Garrec (@kevingarrec)
