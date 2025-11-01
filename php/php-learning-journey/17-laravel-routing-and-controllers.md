
# Lesson 17: Laravel Routing and Controllers

Routing and controllers are the foundation of any Laravel application. They are responsible for handling incoming requests and returning a response.

## Routing

In Laravel, a route defines a URL and the action that should be taken when that URL is requested. Routes are defined in the `routes/web.php` file.

### Basic Routing

A simple route consists of a URL and a closure that is executed when the URL is requested.

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello, World!';
});
```

This route defines that when a user visits `/hello`, the string `Hello, World!` should be returned.

### Route Parameters

Sometimes you will need to capture segments of the URI within your route. For example, you may need to capture a user's ID from the URL. You may do so by defining route parameters:

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/users/{id}', function ($id) {
    return 'User ' . $id;
});
```

### Named Routes

Named routes allow you to refer to a route by a name instead of a URL. This can be useful when you want to generate URLs in your views.

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/users/{id}', function ($id) {
    //
})->name('users.show');
```

## Controllers

Instead of defining all of your request handling logic as closures in route files, you may wish to organize this behavior using Controller classes. Controllers can group related request handling logic into a single class.

### Creating a Controller

You can create a controller using the `make:controller` Artisan command.

```bash
php artisan make:controller UserController
```

This will create a new file `app/Http/Controllers/UserController.php`.

### Defining a Controller Method

Let's add a method to our `UserController` to handle the request to show a user.

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
```

### Routing to a Controller

Now, we can update our route to point to the `show` method of the `UserController`.

```php
<?php

use App\Http\Controllers\UserController;

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
```

## Resource Controllers

If you are creating a CRUD (Create, Read, Update, Delete) application, you will likely need to create a set of routes for each resource. Laravel provides a convenient way to do this using resource controllers.

To create a resource controller, you can use the `--resource` flag with the `make:controller` command.

```bash
php artisan make:controller PhotoController --resource
```

This will create a controller with methods for each of the common CRUD actions.

Next, you can register a resourceful route to the controller:

```php
<?php

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
```

This single route declaration creates multiple routes to handle a variety of actions on the resource.

## Next Steps

This concludes your initial journey into PHP and Laravel. You have learned the basics of the PHP language and the fundamentals of the Laravel framework. From here, you can continue to explore the many features of Laravel, such as:

- **Blade Templating:** Laravel's powerful templating engine.
- **Eloquent ORM:** An elegant and powerful way to interact with your database.
- **Authentication:** A complete authentication system out of the box.
- **Testing:** A robust testing suite to ensure the quality of your code.

Happy coding!
