Project Laravel Blog Group Assignment


#Steps Team Members

- Run `composer install`
- Create MySQL database
- Create `.env` file
  - Update `APP_KEY` with `php artisan key:generate`
  - Update database connection info
- Run `php artisan migrate`
- Seed the database
  - Run `php artisan db:seed`
- Run `php artisan storage:link`
- Set up Apache web server