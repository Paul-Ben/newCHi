# Website and Blog with admin panel

### Author: Paul-Ben Ajene

## Description:
This is a web application. A Website with a landing page and an admin panel to manage CRUD operations using Laravel (laravel version 10).

# How to Use
- Clone the repository and navigate (cd) into it: `git clone https://github.dev/Paul-Ben/newCHi`

- copy contents of .env.example file to .env file.
- update the database details in the .env file as 
    - `DB_DATABASE= your_Database_name` 
    - `DB_USERNAME=your_username` 
    - `DB_PASSWORD=your_password`
- run the commands: `composer update` and `composer install`
- Next run the command: *`php artisan migrate`*  to run the database migrations 
- Next run the command: *`php artisan serve`* to run the server to serve the project.
- browser url is http://127.0.0.1:8000 to check that the application is running fine.
- Visit http:..127.0.0.1:8000/register to create a new account.
- login wiht the credentials created to explore the admin panel.
- sample database file that can be used to set up your database is in the main folder  a file named nuchi.sql

