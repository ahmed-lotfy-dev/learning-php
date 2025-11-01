
# Lesson 19: Eloquent ORM

Eloquent is Laravel's built-in object-relational mapper (ORM). It provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding "Model" which is used to interact with that table.

## Defining Models

To get started, let's create an Eloquent model. Models typically live in the `app/Models` directory and extend the `Illuminate\Database\Eloquent\Model` class. You can create a model using the `make:model` Artisan command:

```bash
php artisan make:model Flight
```

### Table Names

By convention, the plural name of the class will be used as the table name. For example, a `Flight` model will store records in the `flights` table. You may specify a custom table by defining a `table` property on your model:

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'my_flights';
}
```

### Primary Keys

Eloquent will also assume that each table has a primary key column named `id`. You may define a `primaryKey` property to override this convention. In addition, Eloquent assumes that the primary key is an auto-incrementing integer value, which means that by default the primary key will be cast to an `int` automatically.

## Retrieving Models

Once you have created a model and its associated database table, you are ready to start retrieving data from your database. Think of each Eloquent model as a powerful query builder allowing you to fluently query the database table associated with the model.

```php
<?php

use App\Models\Flight;

// Retrieve all flights...
$flights = Flight::all();

// Retrieve a flight by its primary key...
$flight = Flight::find(1);

// Retrieve the first flight matching the constraints...
$flight = Flight::where('active', 1)->first();
```

## Inserting & Updating Models

### Inserts

To create a new record in the database, create a new model instance, set attributes on the model, then call the `save` method:

```php
<?php

use App\Models\Flight;

$flight = new Flight;

$flight->name = 'New Flight';

$flight->save();
```

### Updates

The `save` method may also be used to update models that already exist in the database. To update a model, you should retrieve it, set any attributes you wish to update, and then call the `save` method. Again, the `updated_at` timestamp will automatically be updated, so there is no need to manually set its value:

```php
<?php

use App\Models\Flight;

$flight = Flight::find(1);

$flight->name = 'Updated Flight Name';

$flight->save();
```

## Deleting Models

To delete a model, call the `delete` method on a model instance:

```php
<?php

use App\Models\Flight;

$flight = Flight::find(1);

$flight->delete();
```

## Relationships

Database tables are often related to one another. For example, a blog post may have many comments, or an order could be related to the user who placed it. Eloquent makes managing and working with these relationships easy, and supports several different types of relationships:

- One To One
- One To Many
- Many To Many
- Has One Through
- Has Many Through
- One To One (Polymorphic)
- One To Many (Polymorphic)
- Many To Many (Polymorphic)

## Next Steps

Eloquent is a powerful tool that can greatly simplify your database interactions. This lesson has only scratched the surface of what Eloquent can do. To learn more, be sure to check out the official Laravel documentation.
