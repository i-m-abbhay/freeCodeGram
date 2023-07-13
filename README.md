# Learning Laravel

> Started a new journey of learning Laravel during a project requirement for the internship.
> <br>
> Up until now I found it very interesting and easy to go with and it's kind of at your fingertips to create such amazing projects and web Apps.

> ### phpunit.xml
>
> It's a framework for php testing.

> laravel -> project
> laravel framework -> framework

## Require & Require-dev

_These packages are required during the run and development time._

> Just like npm install there is composer install.

## .env file

It's a centrallised secret file for all the secrets of our app.

## breeze

It's a package for authentication in laravel. You can use this after by checking out this [Link](https://laravel.com/docs/10.x/starter-kits#laravel-breeze).

> ### How to connect our application to Database?
>
> it picks the name of db in .env file.
> php artisan migrate -> this command will create the database for you if there is a server running mysql.

## Understanding the Migration

Migrations are like version control for your database, allowing your team to define and share the application's database schema definition. If you have ever had to tell a teammate to manually add a column to their local database schema after pulling in your changes from source control, you've faced the problem that database migrations solve.

> migrate <br>
> migrate:fresh Drop all tables and re-run all migrations<br>
> migrate:install Create the migration repository<br>
> migrate:refresh Reset and re-run all migrations<br>
> migrate:reset Rollback all database migrations<br>
> migrate:rollback Rollback the last database migration<br>
> migrate:status Show the status of each migration

```powershell
Description:
  Run the database migrations

Usage:
  migrate [options]

Options:
      --database[=DATABASE]        The database connection to use
      --force                      Force the operation to run when in production
      --path[=PATH]                The path(s) to the migrations files to be executed (multiple values allowed)
      --realpath                   Indicate any provided migration file paths are pre-resolved absolute paths
      --schema-path[=SCHEMA-PATH]  The path to a schema dump file
      --pretend                    Dump the SQL queries that would be run
      --seed                       Indicates if the seed task should be re-run
      --seeder[=SEEDER]            The class name of the root seeder
      --step                       Force the migrations to be run so they can be rolled back individually
      --isolated[=ISOLATED]        Do not run the command if another instance of the command is already running [default: false]
  -h, --help                       Display help for the given command. When no command is given display help for the list command
  -q, --quiet                      Do not output any message
  -V, --version                    Display this application version
      --ansi|--no-ansi             Force (or disable --no-ansi) ANSI output
  -n, --no-interaction             Do not ask any interactive question
      --env[=ENV]                  The environment the command should run under
  -v|vv|vvv, --verbose             Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

_Checkout database>migrations._
![Migration folder view](image.png)

#### _Laravel records all of the tables it has created during migration in a table named "migration" in our database. That means you cannot change anything by changing a migration file laravel has already executed because it is not going to touch that file again._

#### In order to update any existing table you have to use `php artisan make:migration name_of_migration --table=existing_table_name` command.

_It was not running in my case due to some compatibility issue with mariaDB version. But I've found a way to run raw SQL queries for the time being._
