
# Lesson 21: Testing

Laravel is built with testing in mind. In fact, support for testing with PHPUnit is included out of the box, and a `phpunit.xml` file is already set up for your application. The framework also ships with convenient helper methods that allow you to expressively test your applications.

## Why Test?

Automated tests are a great way to ensure that your application is working correctly. They can help you to:

- **Catch bugs early:** Find bugs before they make it to production.
- **Refactor with confidence:** Make changes to your code without fear of breaking something.
- **Improve code quality:** Writing tests often forces you to write better, more modular code.

## Test Types

In a Laravel application, you will typically write two types of tests:

- **Unit tests:** Tests that focus on a very small, isolated portion of your code.
- **Feature tests:** Tests that test a larger portion of your code, including how several objects interact with each other or even a full HTTP request.

## Creating Tests

To create a new test case, use the `make:test` Artisan command:

```bash
# Create a new feature test...
php artisan make:test UserTest

# Create a new unit test...
php artisan make:test UserTest --unit
```

## Running Tests

To run your tests, you may use the `test` Artisan command:

```bash
php artisan test
```

## Feature Tests

Laravel provides a very fluent API for making HTTP requests to your application, examining the output, and even interacting with forms.

```php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_basic_request()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
```

## Database Testing

Laravel also provides a variety of helpful tools and assertions to make it easier to test your database-driven applications. One of the most common challenges of database testing is how to reset your database after each test. Laravel provides a `RefreshDatabase` trait that will automatically reset your database after each test.

```php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_basic_example()
    {
        $this->post('/register', [
            'name' => 'Sally',
            'email' => 'sally@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'sally@example.com',
        ]);
    }
}
```

## Next Steps

This lesson has only scratched the surface of testing in Laravel. To learn more, be sure to check out the official Laravel documentation on testing. With a solid testing foundation, you can build robust and reliable Laravel applications.
