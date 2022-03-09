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

## Screenshots
The following screenshots show the UI that is available to a user with admin access. This is to demonstrate all the functionality offered by the app.

### Main Dashboard
![Screenshot (49)](https://user-images.githubusercontent.com/24196592/157512799-c5c01d96-1bce-48a8-80df-57a1bc44448a.png)
![Screenshot (50)](https://user-images.githubusercontent.com/24196592/157512801-ac283f72-306e-4d64-90ae-8808a1a4bcaf.png)

- Main dashboard displaying all listings currently available. All information about each listing including price, title, author, ISBN and quantity in stock are shown. Both regular users and admin users have access to this page.  Pressing the purchase button for any given listing takes the user to Wipay's payment flow and allows them to complete the purchase using a demo credit card.

### Listings CRUD
![Screenshot (42)](https://user-images.githubusercontent.com/24196592/157509214-836b809c-c33a-42e1-9c35-20771586db66.png)
- Inventory page displaying all listings and allowing the user to perform CRUD operations on any given listing. Any field of the listing can be changed, and this page is available only to admin users.

### Create A New Listing
![Screenshot (46)](https://user-images.githubusercontent.com/24196592/157510480-3b084846-a7dc-4cab-ae21-d662d526922b.png)
- This page is displayed when an admin user clicks the "New Listing" Button on the inventory page. This allows the user to create a new listing from scratch and add it to the database. This page is also admin - only access.

### Update An Existing Listing
![Screenshot (47)](https://user-images.githubusercontent.com/24196592/157510913-86b86eb2-1894-476a-bfcd-1d16f6be0d1f.png)
- This page is displayed when an admin user clicks the "Edit" Button on the inventory page for a given listing. This allows the user to edit any or all fields of the listing and update that listing in the database with the new information. This page is also admin - only access.

### View Sales Activity
![Screenshot (43)](https://user-images.githubusercontent.com/24196592/157509426-a8b0dcbb-3d15-4b18-9ee9-5fd016af9f88.png)
- Sales page displaying all sales activity in the store. When a new sale is made, a new record is created for that sale including the last four digits of the card that was used to make the purchase, The amount that was charged, the status of the transaction and the transaction ID. This page is only available to admin users.

### Search For A Listing
![Screenshot (44)](https://user-images.githubusercontent.com/24196592/157509747-acf5ef76-7a01-4eb6-9504-866f833b714a.png)
- Search page which is navigated to when the user searches for a listing. When a search is exectued, all listings that contain the specified pattern in the search text are return. All users - whether regular or admin, have access to this page. 






 

