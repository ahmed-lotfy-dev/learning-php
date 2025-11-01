# Lesson 14: Namespaces and Autoloading

As your projects grow, you may find that you have multiple classes with the same name. This can lead to naming conflicts. Namespaces solve this problem by allowing you to group your classes under a unique name.

## Namespaces

A namespace is a way of encapsulating items. It can be seen as an abstract container that holds a set of unique identifiers (names).

### Declaring a Namespace

You can declare a namespace at the top of a PHP file using the `namespace` keyword.

**MyProject/MyClass.php:**

```php
<?php
namespace MyProject;

class MyClass {
    // ...
}
?>
```

### Using a Namespace

To use a class from a namespace, you can either refer to it by its fully qualified name or by using the `use` keyword.

**index.php:**

```php
<?php
require 'MyProject/MyClass.php';

// Using the fully qualified name
$obj = new \MyProject\MyClass();

// Using the `use` keyword
use MyProject\MyClass;

$obj = new MyClass();
?>
```

## Autoloading

In a large project, you may have hundreds of class files. Instead of including each file manually, you can use an autoloader to automatically include the files when they are needed.

### The `spl_autoload_register()` Function

The `spl_autoload_register()` function registers a function with the SPL autoloader queue. This function will be called automatically when you try to use a class that has not been defined yet.

**index.php:**

```php
<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new MyClass1();
$obj2 = new MyClass2(); 
?>
```

### Autoloading with Namespaces

When using namespaces, you need to make sure that your autoloader can find the correct file for a given class. A common convention is to have the namespace match the directory structure.

For example, the class `MyProject\MyClass` would be located in the file `MyProject/MyClass.php`.

**index.php:**

```php
<?php
spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class). '.php';
    if (file_exists($file)) {
        require $file;
    }
});

use MyProject\MyClass;

$obj = new MyClass();
?>
```

## Next Lesson

In the next lesson, you will learn about Composer, a dependency manager for PHP. Composer will help you manage the external libraries that your project depends on, and it will also provide you with a powerful autoloader.
