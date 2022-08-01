<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Graveyard Management System App

A demo application to illustrate how Filament Admin works.

![Graveyard Management System](https://github.com/G-Mobility/gms\public\assets\Readme\GMS.png)

## Installation with docker

Clone the repo locally:

```sh
git clone https://github.com/G-Mobility/nfa.git
```

Install PHP dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Start up the docker containers using laravel/sail

```sh
./vendor/bin/sail up -d
```

Run database migrations:

```sh
./vendor/bin/sail artisan migrate
```

Run database seeder:

```sh
./vendor/bin/sail artisan db:seed
```

Install npm packages and run the dev server (the output will give the address):

```sh
npm install && npm run dev
```
Create a admin user with the following command
```sh
./vendor/bin/sail artisan make:filament-user
```

## Installation with XAMPP
Clone the repo locally:

```sh
cd C:\xampp\htdocs
```

```sh
git clone https://github.com/G-Mobility/nfa.git
```

Install PHP dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Install npm packages and run the dev server (the output will give the address):

```sh
npm install && npm run dev
```

Run database migrations:

```sh
./vendor/bin/sail artisan migrate
```

Run database seeder:

```sh
./vendor/bin/sail artisan db:seed
```


## Features to explore
-Visit the frontend resources/views/Site

### To Do

-Navbar animations
-Store frontend
-Competitions page visit https://www.fifa.com/fifaplus/en/tournaments && https://www.thefa.com/competitions
-About page 

