
# Lesson 6: Arrays

An array is a special variable that can hold many values under a single name. You can access the values by referring to an index number or a name.

## Types of Arrays

PHP has three types of arrays:

- **Indexed arrays:** Arrays with a numeric index.
- **Associative arrays:** Arrays with named keys.
- **Multidimensional arrays:** Arrays containing one or more arrays.

## Indexed Arrays

Indexed arrays store elements with a numeric index. The index usually starts from 0.

### Creating an Indexed Array

```php
<?php
$cars = array("Volvo", "BMW", "Toyota");
// or
$cars = ["Volvo", "BMW", "Toyota"];
?>
```

### Accessing Array Elements

You can access an array element by referring to its index number.

```php
<?php
$cars = ["Volvo", "BMW", "Toyota"];
echo $cars[0]; // Outputs "Volvo"
echo $cars[1]; // Outputs "BMW"
?>
```

### Getting the Length of an Array

The `count()` function is used to get the number of elements in an array.

```php
<?php
$cars = ["Volvo", "BMW", "Toyota"];
echo count($cars); // Outputs 3
?>
```

### Looping Through an Indexed Array

You can use a `for` loop or a `foreach` loop to iterate through the elements of an indexed array.

```php
<?php
$cars = ["Volvo", "BMW", "Toyota"];

// Using a for loop
for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i] . "<br>";
}

// Using a foreach loop
foreach ($cars as $car) {
    echo $car . "<br>";
}
?>
```

## Associative Arrays

Associative arrays use named keys that you assign to them.

### Creating an Associative Array

```php
<?php
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
// or
$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
?>
```

### Accessing Array Elements

You can access an array element by referring to its key name.

```php
<?php
$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
echo $age["Ben"]; // Outputs 37
?>
```

### Looping Through an Associative Array

You can use a `foreach` loop to iterate through the elements of an associative array.

```php
<?php
$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];

foreach ($age as $name => $value) {
    echo $name . " is " . $value . " years old.<br>";
}
?>
```

## Multidimensional Arrays

A multidimensional array is an array containing one or more arrays.

### Creating a Multidimensional Array

```php
<?php
$cars = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15]
];
?>
```

### Accessing Array Elements

You can access elements of a multidimensional array by using multiple indexes.

```php
<?php
$cars = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15]
];

echo $cars[0][0]; // Outputs "Volvo"
echo $cars[1][1]; // Outputs 15
?>
```

## Next Lesson

In the next lesson, we will learn about PHP superglobals, which are predefined variables that are always accessible, regardless of scope.
