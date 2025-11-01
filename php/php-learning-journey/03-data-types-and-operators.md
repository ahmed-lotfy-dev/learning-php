
# Lesson 3: Data Types and Operators

In this lesson, you will learn about the different data types in PHP and the various operators you can use.

## PHP Data Types

PHP supports the following data types:

- **String:** A sequence of characters.
- **Integer:** A non-decimal number.
- **Float (or Double):** A number with a decimal point.
- **Boolean:** Represents two possible states: `true` or `false`.
- **Array:** Stores multiple values in one single variable.
- **Object:** An instance of a class.
- **NULL:** A special data type which can have only one value: `NULL`.
- **Resource:** A special variable, holding a reference to an external resource.

### Type Juggling

PHP is a loosely typed language. This means that you do not have to declare the data type of a variable when you create it. PHP automatically converts the variable to the correct data type, depending on its value.

## PHP Operators

Operators are used to perform operations on variables and values.

### Arithmetic Operators

| Operator | Name             | Example       |
|----------|------------------|---------------|
| `+`      | Addition         | `$x + $y`     |
| `-`      | Subtraction      | `$x - $y`     |
| `*`      | Multiplication   | `$x * $y`     |
| `/`      | Division         | `$x / $y`     |
| `%`      | Modulus          | `$x % $y`     |
| `**`     | Exponentiation   | `$x ** $y`    |

### Assignment Operators

The basic assignment operator is `=`. It means that the left operand gets set to the value of the expression on the right.

| Operator | Example    | Is The Same As |
|----------|------------|----------------|
| `=`      | `$x = $y`  | `$x = $y`      |
| `+=`     | `$x += $y` | `$x = $x + $y` |
| `-=`     | `$x -= $y` | `$x = $x - $y` |
| `*=`     | `$x *= $y` | `$x = $x * $y` |
| `/=`     | `$x /= $y` | `$x = $x / $y` |
| `%=`     | `$x %= $y` | `$x = $x % $y` |

### Comparison Operators

Comparison operators are used to compare two values.

| Operator | Name                     | Example       |
|----------|--------------------------|---------------|
| `==`     | Equal                    | `$x == $y`    |
| `===`    | Identical                | `$x === $y`   |
| `!=`     | Not equal                | `$x != $y`    |
| `<>`     | Not equal                | `$x <> $y`    |
| `!==`    | Not identical            | `$x !== $y`   |
| `>`      | Greater than             | `$x > $y`     |
| `<`      | Less than                | `$x < $y`     |
| `>=`     | Greater than or equal to | `$x >= $y`    |
| `<=`     | Less than or equal to    | `$x <= $y`    |

### Logical Operators

Logical operators are used to combine conditional statements.

| Operator | Name | Example               |
|----------|------|-----------------------|
| `and`    | And  | `$x < 100 and $y > 50`  |
| `or`     | Or   | `$x == 100 or $y == 50` |
| `xor`    | Xor  | `$x == 10 xor $y == 5`  |
| `&&`     | And  | `$x < 10 && $y > 5`     |
| `||`     | Or   | `$x == 10 || $y == 5`   |
| `!`      | Not  | `!$x`                 |

## Next Lesson

In the next lesson, we will explore control structures, which allow you to control the flow of your code.
