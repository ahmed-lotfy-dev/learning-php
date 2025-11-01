
# Lesson 7: PHP Superglobals

PHP superglobals are predefined variables that are always accessible, regardless of scope. You can access them from any function, class, or file without having to do anything special.

## The Superglobal Variables

The PHP superglobal variables are:

- `$GLOBALS`
- `$_SERVER`
- `$_REQUEST`
- `$_POST`
- `$_GET`
- `$_FILES`
- `$_ENV`
- `$_COOKIE`
- `$_SESSION`

This lesson will cover some of the most commonly used superglobals.

## `$GLOBALS`

`$GLOBALS` is an associative array that contains all global variables. You can use it to access global variables from anywhere in your script.

```php
<?php
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // Outputs 15
?>
```

## `$_SERVER`

`$_SERVER` is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server.

Here are some of the most important elements of `$_SERVER`:

- `$_SERVER['PHP_SELF']`: Returns the filename of the currently executing script.
- `$_SERVER['SERVER_NAME']`: Returns the name of the host server.
- `$_SERVER['HTTP_HOST']`: Returns the Host header from the current request.
- `$_SERVER['HTTP_USER_AGENT']`: Returns the User-Agent header from the current request.
- `$_SERVER['SCRIPT_NAME']`: Returns the path of the current script.

```php
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
?>
```

## `$_GET`

`$_GET` is an associative array of variables passed to the current script via the URL parameters (also known as a query string).

If you have a URL like `http://example.com/test.php?name=John&age=25`, you can access the values of `name` and `age` using `$_GET`.

```php
<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    echo "Welcome, " . $_GET['name'] . "! You are " . $_GET['age'] . " years old.";
}
?>
```

## `$_POST`

`$_POST` is an associative array of variables passed to the current script via the HTTP POST method when using HTML forms.

```html
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
```

## `$_REQUEST`

`$_REQUEST` is an associative array that contains the contents of `$_GET`, `$_POST`, and `$_COOKIE`.

`$_REQUEST` can be used to get the result from form data sent with both the GET and POST methods.

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
```

## Next Lesson

In the next lesson, we will learn about sessions and cookies, which are used to store information about the user across multiple pages.
