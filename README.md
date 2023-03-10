# Games CRUD

This project is a CRUD application that allows users to create, read, update, and delete games. The application is built using Laravel and utilizes a MySQL database to store game information.

# Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

# Prerequisites

What things you need to install the software and how to install them. For example:

-   PHP >= 7.2
-   Composer
-   MySQL

# Installing

A step by step series of examples that tell you how to get a development env running.

1. Clone the repository

2. Install dependencies :

    - composer install

3. Create a copy of .env.example and rename it to .env

4. Generate a new application key

    - php artisan key:generate

5. Configure your database settings in .env

    - DB_CONNECTION=mysql
    - DB_HOST=127.0.0.1
    - DB_PORT=3306
    - DB_DATABASE=yourdatabasename
    - DB_USERNAME=yourusername
    - DB_PASSWORD=yourpassword

6. Migrate the database and seed

    - php artisan migrate --seed

7. Start the development server

    - php artisan serve

# Documentation

-   [API Documentation](https://documenter.getpostman.com/view/14649242/2s935hPmK5).

# Built With

Laravel - The web framework used
Composer - Dependency Management
