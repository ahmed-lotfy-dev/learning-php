
# Lesson 2: PHP Syntax and Variables

In this lesson, you will learn about the basic syntax of PHP and how to declare and use variables.

## PHP Tags

PHP code is enclosed in special start and end tags. The most common tags are `<?php` and `?>`.

```php
<?php
// Your PHP code goes here
?>
```

## Escaping from HTML

PHP can be embedded directly into HTML. The PHP parser only parses the code within the PHP tags.

```html
<!DOCTYPE html>
<html>
<head>
    <title>My PHP Page</title>
</head>
<body>
    <h1><?php echo "Hello, World!"; ?></h1>
</body>
</html>
```

## Comments

Comments are used to document your code. PHP supports single-line and multi-line comments.

```php
<?php
// This is a single-line comment

/*
This is a multi-line comment
*/
?>
```

## Variables

Variables are used to store data. In PHP, a variable starts with a `$` sign, followed by the name of the variable.

### Variable Naming Rules

- A variable name must start with a letter or an underscore.
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ).
- A variable name should not contain spaces.
- Variable names are case-sensitive (`$name` and `$NAME` are two different variables).

### Declaring Variables

Here is an example of how to declare variables in PHP:

```php
<?php
$name = "John";
$age = 25;
$is_student = true;
?>
```

### Outputting Variables

You can output the value of a variable using the `echo` or `print` statement.

```php
<?php
$name = "John";
$age = 25;

echo "My name is " . $name . " and I am " . $age . " years old.";
?>
```

## Next Lesson

In the next lesson, we will learn about the different data types in PHP and the operators you can use to work with them.
