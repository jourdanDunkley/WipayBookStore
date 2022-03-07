<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Wipay Bookstore

This is a Laravel Application built to satisfy the backend developer challenge by Wipay. This application is a web-based bookstore whose primary purpose is serving API requests under a RESTful convention. 

Due to the pandemic, foot traffic to a local bookstore has been diminished. This e-commerce style web application was built in order to solve this problem. It is the intention that this application will help drive sales and improve customer convenience.

Features of this app are:

- A dashboard that is accessible to any user, whether logged in or not. On this dashboard, a user may view the current available listings and search for listings by title.
- Ability to purchase any book using Wipay's Payment API and a test credit card. Only registered and logged in users are able to purchase a book.
- A page with admin-only access for creating, reading, updating or deleting any listing.
- A page with admin-only access for viewing all sales activity. Data such as the last four digits of the card number of the purchaser, transaction total, transaction status and transaction ID can be viewed.
- Users may log in, register and log out at will.
- When a purchase is executed, the inventory of that particular listing is decremented by one to simulate a real transaction. This is reflected on the listings page.

## Authentication and Authorization

Authentication in this app was implemented using Breeze, a starter-kit offering all Laravel's authentication features - including login, registration, password reset, email verification and password confirmation.

Authorization was implemented using a middleware that checks whether the user is an administrator or not. This is done by checking a field called is_admin on the User table in the database for the current logged in user. This middleware was applied to all routes which a normal user should not be able to access.

## Views and Styling

The views for this application were written using both Laravel Blade Components and standard HTML. Styling was implemented using mostly Tailwind CSS. 

## Database Operations 

All database operations were executed using Eloquent, which is an object-relational mapper that comes with Laravel. Each database table comes with a corresponding model which is used to interact with that data. Eloquent made creating, reading, updating and deleting data a seamless process. The database used in this project was MySQL.
