
# Lesson 5: Functions

Functions are reusable blocks of code that can be called from anywhere in your script. They make your code more organized, easier to read, and more efficient.

## Creating a Function

A function definition starts with the keyword `function`, followed by the name of the function and a set of parentheses `()`.

```php
<?php
function sayHello() {
    echo "Hello, World!";
}
?>
```

## Calling a Function

To call a function, you simply write its name followed by parentheses.

```php
<?php
function sayHello() {
    echo "Hello, World!";
}

sayHello(); // Outputs "Hello, World!"
?>
```

## Function Arguments

You can pass data to a function through arguments. Arguments are specified after the function name, inside the parentheses.

```php
<?php
function greet($name) {
    echo "Hello, " . $name . "!";
}

greet("John"); // Outputs "Hello, John!"
?>
```

You can have multiple arguments, separated by commas.

```php
<?php
function add($a, $b) {
    echo $a + $b;
}

add(5, 10); // Outputs 15
?>
```

## Default Argument Values

You can specify a default value for an argument. If a value is not passed for that argument when the function is called, the default value will be used.

```php
<?php
function greet($name = "Guest") {
    echo "Hello, " . $name . "!";
}

greet(); // Outputs "Hello, Guest!"
greet("John"); // Outputs "Hello, John!"
?>
```

## Returning Values

A function can return a value using the `return` statement. When a `return` statement is encountered, the function execution stops, and the specified value is returned.

```php
<?php
function add($a, $b) {
    return $a + $b;
}

$sum = add(5, 10);
echo $sum; // Outputs 15
?>
```

## Variable Scope

The scope of a variable is the part of the script where the variable can be referenced/used.

- **Local scope:** A variable declared within a function has a local scope and can only be accessed within that function.
- **Global scope:** A variable declared outside a function has a global scope and can only be accessed outside a function.

To access a global variable from within a function, you need to use the `global` keyword.

```php
<?php
$x = 5;

function myTest() {
    global $x;
    echo "Variable x inside function is: " . $x;
}

myTest();

echo "<br>Variable x outside function is: " . $x;
?>
```

## Next Lesson

In the next lesson, we will dive into arrays, a powerful data structure for storing and managing collections of data.
