
# Lesson 9: Forms and User Input

HTML forms are the primary way to get input from users. In this lesson, you will learn how to create HTML forms and process the submitted data using PHP.

## Creating an HTML Form

An HTML form is created using the `<form>` tag. The two most important attributes of the `<form>` tag are `action` and `method`.

- **`action`:** Specifies the URL of the page that will process the form data.
- **`method`:** Specifies the HTTP method to use when submitting the form data. The two most common methods are `GET` and `POST`.

Here is an example of a simple HTML form:

```html
<form action="process.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br>
    <input type="submit" value="Submit">
</form>
```

## Processing Form Data

When a user submits a form, the form data is sent to the script specified in the `action` attribute. You can then access the submitted data using the `$_GET` or `$_POST` superglobals, depending on the form's method.

### Using the `POST` Method

If the form's method is `post`, the form data will be available in the `$_POST` superglobal.

**process.php:**

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "Welcome, " . $name . "! Your email is " . $email . ".";
}
?>
```

### Using the `GET` Method

If the form's method is `get`, the form data will be available in the `$_GET` superglobal.

**process.php:**

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["name"];
    $email = $_GET["email"];

    echo "Welcome, " . $name . "! Your email is " . $email . ".";
}
?>
```

## Form Validation

It is important to validate form data to ensure that it is in the correct format and to protect your application from malicious input.

Here are some common validation checks:

- **Check for empty fields:** Make sure that required fields are not empty.
- **Validate email format:** Check if the email address is in a valid format.
- **Sanitize input:** Remove any illegal characters from the input data.

Here is an example of how to validate a form:

```php
<?php
$name_err = $email_err = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_err = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $email_err = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $name_err;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $email_err;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
```

## Next Lesson

In the next lesson, you will learn how to work with files in PHP, including reading from and writing to files on the server.
