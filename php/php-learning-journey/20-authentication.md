
# Lesson 20: Authentication

Laravel makes implementing authentication very simple. In fact, almost everything is configured for you out of the box. The authentication configuration file is located at `config/auth.php`, which contains several well-documented options for tweaking the behavior of the authentication services.

## Starter Kits

To give you a head start, Laravel offers several starter kits that provide a complete authentication system.

### Laravel Breeze

Laravel Breeze is a minimal, simple implementation of all of Laravel's authentication features, including login, registration, password reset, email verification, and password confirmation. Breeze's default view layer is made up of simple Blade templates styled with Tailwind CSS.

You may install Laravel Breeze using Composer:

```bash
composer require laravel/breeze --dev

php artisan breeze:install

npm install
npm run dev
php artisan migrate
```

### Laravel Jetstream

For more advanced features, you might consider Laravel Jetstream. Jetstream provides a beautifully designed application scaffolding for Laravel and includes login, registration, email verification, two-factor authentication, session management, API support via Laravel Sanctum, and optional team management.

## Manually Authenticating Users

You are not required to use the authentication scaffolding included with Laravel. If you choose to not use this scaffolding, you will need to manage user authentication using the `Auth` facade.

### The `attempt` Method

The `attempt` method is used to handle authentication attempts from your application's login form. If authentication is successful, you should regenerate the user's session to prevent session fixation:

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
```

### Logging Out

To log users out of your application, you may use the `logout` method on the `Auth` facade. This will clear the authentication information in the user's session:

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
```

## Protecting Routes

Route middleware can be used to only allow authenticated users to access a given route. Laravel ships with an `auth` middleware, which is defined at `Illuminate\Auth\Middleware\Authenticate`.

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/profile', function () {
    // Only authenticated users may enter...
})->middleware('auth');
```

## Next Steps

Authentication is a complex topic, and this lesson has only provided a brief overview. To learn more, be sure to read the official Laravel documentation on authentication.
