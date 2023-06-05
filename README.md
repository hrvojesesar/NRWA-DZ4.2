If you want to run our Laravel application, you must complete the following steps:

1. Import the Northwind database into MySQL: https://code.google.com/archive/p/northwindextended/downloads
2. Run cp .env.example .env
3. In .env file configure DB_DATABASE=northwind
4. Run composer install
5. Run php artisan key:generate
6. Run php artisan serve


Unregistered users - read-role in 2 entites: category and customercustomerdemo
Registered users - read-role in all entites
Admin user - read-role and create-role in all entities
Super Admin user - CRUD-roles in all entites

