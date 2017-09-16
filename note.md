php artisan ide-helper:generate

php artisan ide-helper:meta

php artisan optimize

============================

php artisan clear-compiled 

composer dump-autoload

php artisan optimize

=============================

php artisan make:provider HelperServiceProvider

=============================

php artisan make:migration create_xxxxs_table

php artisan migrate

php artisan backpack:crud xxx       #use singular, not plural

## Usage

Open the console and enter one of the commands to generate:

- Models (available options: --softdelete)

``` bash
$ php artisan backpack:model {Entity_name}
```

- Requests

``` bash
$ php artisan backpack:request {Entity_name}
```

- Views (available options: --plain)

``` bash
$ php artisan backpack:view {Entity_name}
``` 

- Config files

``` bash
$ php artisan backpack:config {Entity_name}
```

- All files for a new Backpack\CRUD interface:

``` bash
$ php artisan backpack:crud {Entity_name}
```

- A new Backpack\CRUD file:
``` bash
$ php artisan backpack:crud-controller {Entity_name}
$ php artisan backpack:crud-model {Entity_name}
$ php artisan backpack:crud-request {Entity_name}