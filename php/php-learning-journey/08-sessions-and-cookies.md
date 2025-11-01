
# Lesson 8: Sessions and Cookies

Sessions and cookies are used to store information about the user. This allows you to persist data across multiple pages of your website.

## Cookies

A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too.

### Creating a Cookie

You can create a cookie using the `setcookie()` function.

```php
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
```

### Accessing a Cookie

You can access the value of a cookie using the `$_COOKIE` superglobal.

```php
<?php
if(isset($_COOKIE["user"])) {
    echo "Welcome, " . $_COOKIE["user"] . "!";
} else {
    echo "Welcome, Guest!";
}
?>
```

### Deleting a Cookie

To delete a cookie, you need to set the cookie with a date in the past.

```php
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
```

## Sessions

A session is a way to store information (in variables) to be used across multiple pages. Unlike cookies, the information is not stored on the user's computer.

### Starting a Session

Before you can store information in a session, you must first start the session using the `session_start()` function.

```php
<?php
session_start();
?>
```

### Storing Session Data

You can store session data in the `$_SESSION` superglobal.

```php
<?php
session_start();

$_SESSION["username"] = "johndoe";
$_SESSION["favorite_color"] = "green";
?>
```

### Accessing Session Data

You can access session data from any page on your website.

```php
<?php
session_start();

if(isset($_SESSION["username"])) {
    echo "Welcome, " . $_SESSION["username"] . "!";
} else {
    echo "Welcome, Guest!";
}
?>
```

### Destroying a Session

To remove all global session variables and destroy the session, use `session_unset()` and `session_destroy()`.

```php
<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
```

## Sessions vs. Cookies

| Feature       | Cookies                               | Sessions                                    |
|---------------|---------------------------------------|---------------------------------------------|
| **Storage**   | Stored on the user's computer.        | Stored on the server.                       |
| **Capacity**  | Limited to a few kilobytes.           | Can store much more data.                   |
| **Security**  | Less secure, as data is on the client.| More secure, as data is on the server.      |
| **Lifetime**  | Can have a long lifetime.             | Usually ends when the browser is closed.    |

## Next Lesson

In the next lesson, you will learn how to handle user input from HTML forms.
