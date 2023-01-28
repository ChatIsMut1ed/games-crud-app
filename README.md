# Games CRUD

A brief description of your project and what it does.

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

# Built With

Laravel - The web framework used
Composer - Dependency Management
