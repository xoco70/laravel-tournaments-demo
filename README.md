## Installation

- Set your DB Connection in .env

- Create application Key

```
php artisan key:generate
```

- Install dependencies

```
composer install
```
- Create tables in DB

```
php artisan migrate 
```

- Seed data

```
php artisan db:seed --class=LaravelTournamentSeeder
```

You can now access the demo!
