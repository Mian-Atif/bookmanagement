## Project Setup Guide

## Project :Book Mangement System
## Authentication Setup
## Description
This project utilizes Laravel's built-in authentication system for user authentication. Laravel's authentication system includes guards, providers, and middleware, which are configured within the framework. The authentication middleware, auth, is used to check if the user making the request is authenticated. If not, it redirects them to the login page.

To set up authentication in Laravel, you have two options:

Using make:auth Command:

Laravel provides a built-in Artisan command, make:auth, which scaffolds the necessary authentication views, routes, and controllers.
Run the following command in your terminal to generate authentication scaffolding:
bash
Copy code
php artisan make:auth

## Clone the Project:

Open your terminal.
Navigate to the directory where you want to clone the project.
Run the following command to clone the project:
bash
Copy code
git clone https://github.com/Mian-Atif/bookmanagement.git

## Setup Environment Variables:

- Copy the .env.example file to create a new .env file:
- cp .env.example .env
- Update the database configuration in the .env file with your database credentials.
- Install Dependencies:

## Navigate into the project directory:
- cd .\bookmanagement\

## Run the following command to install Composer dependencies:
- composer install
- Generate Application Key:

## Run the following command to generate a unique application key:
- php artisan key:generate
- Run Migrations:

## Run the following command to run database migrations and create tables:
- php artisan migrate
- Serve the Application:

## Run the following command to serve the application:
- php artisan serve

Access the Application:

Once the application is served, you can access it in your web browser at the specified URL (usually http://127.0.0.1:8000).
