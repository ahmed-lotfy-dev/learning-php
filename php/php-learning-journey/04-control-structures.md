
# Lesson 4: Control Structures

Control structures are the heart of any programming language. They allow you to control the flow of your code, making decisions and repeating tasks.

## Conditional Statements

Conditional statements allow you to perform different actions based on different conditions.

### `if` Statement

The `if` statement executes a block of code if a specified condition is true.

```php
<?php
$age = 20;

if ($age >= 18) {
    echo "You are an adult.";
}
?>
```

### `if...else` Statement

The `if...else` statement executes one block of code if a condition is true and another block of code if it is false.

```php
<?php
$age = 16;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
?>
```

### `if...elseif...else` Statement

The `if...elseif...else` statement allows you to check multiple conditions.

```php
<?php
$grade = "B";

if ($grade == "A") {
    echo "Excellent!";
} elseif ($grade == "B") {
    echo "Good job!";
} else {
    echo "You can do better.";
}
?>
```

### `switch` Statement

The `switch` statement is similar to a series of `if` statements on the same expression.

```php
<?php
$favorite_color = "red";

switch ($favorite_color) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
```

## Loops

Loops are used to execute the same block of code a specified number of times.

### `while` Loop

The `while` loop executes a block of code as long as the specified condition is true.

```php
<?php
$i = 1;

while ($i <= 5) {
    echo "The number is " . $i . "<br>";
    $i++;
}
?>
```

### `do...while` Loop

The `do...while` loop will always execute the block of code once, and then it will repeat the loop as long as the specified condition is true.

```php
<?php
$i = 1;

do {
    echo "The number is " . $i . "<br>";
    $i++;
} while ($i <= 5);
?>
```

### `for` Loop

The `for` loop is used when you know in advance how many times the script should run.

```php
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "The number is " . $i . "<br>";
}
?>
```

### `foreach` Loop

The `foreach` loop works only on arrays, and is used to loop through each key/value pair in an array.

```php
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo $value . "<br>";
}
?>
```

## Next Lesson

In the next lesson, you will learn how to create and use functions to make your code more reusable.
