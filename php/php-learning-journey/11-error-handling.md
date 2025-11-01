# Lesson 11: Error Handling

Error handling is a crucial part of any web application. When an error occurs, you want to handle it gracefully and provide a good user experience.

## Basic Error Handling: `die()`

The simplest way to handle an error is to use the `die()` function. This function will print a message and exit the current script.

```php
<?php
if (!file_exists("welcome.txt")) {
    die("File not found");
} else {
    $file = fopen("welcome.txt", "r");
}
?>
```

## Custom Error Handler

You can create a custom error handler function to handle errors in a more sophisticated way. A custom error handler can be used to redirect the user, log the error, or display a custom error message.

To set a custom error handler, you use the `set_error_handler()` function.

```php
<?php
// error handler function
function customError($errno, $errstr) {
    echo "<b>Error:</b> [{$errno}] {$errstr}";
}

// set error handler
set_error_handler("customError");

// trigger error
echo($test);
?>
```

## Error Reporting

In a production environment, you usually want to disable error reporting to avoid showing sensitive information to users. You can do this by setting the `error_reporting()` function to 0.

```php
<?php
// Disable error reporting
error_reporting(0);

// ... your code ...
?>
```

On a development server, you should enable error reporting to help you debug your code.

```php
<?php
// Report all errors
error_reporting(E_ALL);

// ... your code ...
?>
```

## Exception Handling

Exception handling is a more modern way to handle errors. It allows you to throw and catch exceptions, which gives you more control over the error handling process.

### `try...catch` Statement

The `try...catch` statement allows you to test a block of code for errors. The `try` block contains the code to be executed, and the `catch` block contains the code to be executed if an exception is thrown.

```php
<?php
try {
    // code that can throw exceptions
} catch(Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
```

### The `throw` Statement

The `throw` statement allows you to throw an exception. When an exception is thrown, the code following it will not be executed, and PHP will try to find a matching `catch` block.

```php
<?php
function divide($x, $y) {
    if ($y == 0) {
        throw new Exception("Division by zero.");
    }
    return $x / $y;
}

try {
    echo divide(5, 0);
} catch(Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
```

### `try...catch...finally` Statement

The `finally` block is always executed after the `try` and `catch` blocks, regardless of whether an exception was thrown. This is useful for cleanup code, such as closing a database connection.

```php
<?php
try {
    // code that can throw exceptions
} catch(Exception $e) {
    // exception handling
} finally {
    // cleanup code
}
?>
```

## Next Lesson

In the next lesson, we will begin our journey into object-oriented programming (OOP) in PHP.

```