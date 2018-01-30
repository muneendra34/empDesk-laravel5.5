Steps:

1. composer update
2. Rename .env.example with .env
3. Configure database on .env file with folloing details
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=empdesk
    DB_USERNAME=root
    DB_PASSWORD=
4. Find 'empdesk.sql' in /database folder and create database with 'empdesk' name in mysql
5. Import empdesk.sql in empdesk database
6. php artisan key:generate
7. php artisan serve

Check with this:
https://127.0.0.1:8000/

https://127.0.0.1:8000/emp
