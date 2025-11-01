# Lesson 15: Dependency Management with Composer

Composer is a dependency manager for PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.

## Why Use a Dependency Manager?

In modern web development, it is common to use third-party libraries to speed up development. A dependency manager helps you to:

- **Find and install libraries:** Easily find and install libraries from a central repository.
- **Manage versions:** Specify the versions of the libraries you want to use and prevent conflicts.
- **Autoloading:** Automatically load the classes from the installed libraries.

## Installing Composer

You can install Composer by following the instructions on the [official Composer website](https://getcomposer.org/download/).

## The `composer.json` File

The `composer.json` file is the heart of a Composer project. It is a JSON file that contains the configuration for your project, including the dependencies.

Here is an example of a simple `composer.json` file:

```json
{
    "name": "my-project/my-project",
    "description": "My awesome PHP project",
    "require": {
        "monolog/monolog": "^2.0"
    }
}
```

In this example, we are requiring the `monolog/monolog` library with a version constraint of `^2.0`. This means that Composer can install any version from 2.0 up to (but not including) 3.0.

## Installing Dependencies

To install the dependencies listed in your `composer.json` file, you need to run the `install` command:

```bash
composer install
```

This will download the dependencies into a `vendor` directory in your project.

## Autoloading with Composer

Composer also generates an autoloader file that can be used to autoload the classes from the installed libraries. To use the autoloader, you just need to include the `vendor/autoload.php` file in your script.

**index.php:**

```php
<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('my.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
?>
```

## PSR-4 Autoloading

Composer can also be used to autoload your own classes using the PSR-4 autoloading standard. To do this, you need to add an `autoload` section to your `composer.json` file.

```json
{
    "autoload": {
        "psr-4": {
            "MyProject\\": "src/"
        }
    }
}
```

This tells Composer that the `MyProject` namespace corresponds to the `src` directory. After adding this to your `composer.json` file, you need to run the following command to update the autoloader:

```bash
composer dump-autoload
```

Now, you can use the classes from the `MyProject` namespace without having to include them manually.

## Next Lesson

Congratulations! You have now learned the fundamentals of modern PHP development. In the next lesson, we will begin our journey into the world of Laravel, a powerful PHP framework that will help you build amazing web applications.
