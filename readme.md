# BrilliantEarth e-Commerce System

This system is my Final Year Project during 3rd-year at Universiti Teknikal Malaysia Melaka. As the name implies, it is an e-commerce website that selling a jewelry products. 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software and how to install them

```
Give examples
```

### Installing

1. Clone the repo and `cd` into it
1. `composer install`
1. Rename or copy `.env.example` file to `.env`
1. `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your Stripe credentials in your `.env` file. Specifically `STRIPE_KEY` and `STRIPE_SECRET`
1. Set your `APP_URL` in your `.env` file. This is needed for Voyager to correctly resolve asset URLs.
1. Set `ADMIN_PASSWORD` in your `.env` file if you want to specify an admin password. If not, the default password is 'password'
1. `npm install`
1. `npm run dev`
1. `php artisan serve` to run on localhost
1. Visit `localhost:8000` in your browser
1. Visit `/admin` if you want to access the Voyager admin backend. Admin User/Password: `admin@admin.com/password`. Admin Web User/Password: `adminweb@adminweb.com/password`

## Shopping Cart Package

[Crinsane/LaravelShoppingcart](https://github.com/Crinsane/LaravelShoppingcart) - slow to update to the latest versions of Laravel
[hardevine/LaravelShoppingcart](https://github.com/hardevine/LaravelShoppingcart) - updates quicker

## Windows Users - money_format() issue

The `money_format` function does not work in Windows. Take a look at [this thread](https://stackoverflow.com/questions/6369887/alternative-to-money-format-function-in-php-on-windows-platform/18990145). As an alternative, just use the `number_format` function instead.

1. In `app/helpers.php` replace `money_format` line with `return '$'.number_format($price / 100, 2);`
1. In `app/Product.php` replace `money_format` line with `return '$'.number_format($this->price / 100, 2);`
1. In `config/cart.php` set the `thousand_seperator` to an empty string or you might get a 'non well formed numeric value encountered' error. It conflicts with `number_format`.

## Built With

* [Laravel](https://laravel.com/docs/7.x) - The web framework used
* [Voyager](https://voyager-docs.devdojo.com/) - An admin/backend interface for your Laravel app
* [Stripe](https://stripe.com/docs) - Online payment gateway

## Authors

* **Andre Madarang** - *laravel-ecommerce-example* - [drehimself](https://github.com/drehimself)

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc

