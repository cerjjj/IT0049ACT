# Tasks for Today Management System

A CodeIgniter 4 task dashboard created for IT0049 Technical Summative Assessment 1. The application uses one shared database layer to provide a filtered view of today's tasks and a complete chronological task list.

## Required pages

- `/` - Welcome dashboard with tasks whose `task_date` is today
- `/tasks` - Complete task list ordered by date
- `/profile` - The single demo user's profile
- `/about` - Project purpose, technology, and developer identity

## Requirements

- PHP 8.2 or later with `intl`, `mbstring`, and either `sqlite3` or `mysqli`
- Composer 2.0.14 or later

## Quick setup with SQLite

The repository defaults to a local SQLite database so it can be demonstrated without configuring a database server.

```powershell
composer install
php spark migrate
php spark db:seed DatabaseSeeder
php spark serve
```

Open `http://localhost:8080`.

On Windows, `./setup.ps1` runs the install, migration, and seed steps automatically.

## MySQL or XAMPP setup

1. Copy `.env.example` to `.env`.
2. Set `app.developerName` to your name.
3. Create the `tasks_for_today` database, or import `database/tasks_for_today.sql` in phpMyAdmin.
4. Confirm the MySQL credentials in `.env`.
5. If you imported the SQL file, start the application with `php spark serve`. If you created only the empty database, run `php spark migrate` and `php spark db:seed DatabaseSeeder` first.

The migration and seeder files are in `app/Database/Migrations` and `app/Database/Seeds`.

## Project structure

- `app/Controllers` handles the four page requests.
- `app/Models/TaskModel.php` and `app/Models/UserModel.php` provide the shared data layer.
- `app/Views` contains the reusable layout and page templates.
- `public/assets/css/app.css` provides the responsive interface.
- `database/tasks_for_today.sql` is a MySQL-ready database export.

## Submission notes

Before publishing the repository, update `app.developerName` in `.env.example` and add your real GitHub and hosted application links to your submission form. The `vendor` folder is intentionally excluded by `.gitignore`; deployment should run `composer install --no-dev`.

## Verification commands

```powershell
php spark routes
php spark migrate:status
vendor/bin/phpunit
```

The project targets CodeIgniter 4.7.5, as recorded in `composer.lock`.

If your PHP installation has the SQLite extension installed but disabled, enable `extension=sqlite3` in `php.ini`. For a one-session Windows demo, you can instead run:

```powershell
php -d extension=sqlite3 spark migrate
php -d extension=sqlite3 spark db:seed DatabaseSeeder
php -d extension=sqlite3 -S 127.0.0.1:8080 -t public development-router.php
```
