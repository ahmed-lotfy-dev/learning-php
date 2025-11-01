
# Lesson 12: Object-Oriented Programming (OOP) in PHP

Object-Oriented Programming (OOP) is a programming paradigm that is based on the concept of "objects", which can contain data, in the form of fields (often known as attributes or properties), and code, in the form of procedures (often known as methods).

## Classes and Objects

A class is a blueprint for creating objects. It defines the properties and methods that an object will have.

An object is an instance of a class.

### Defining a Class

You can define a class using the `class` keyword, followed by the name of the class and a set of curly braces `{}`.

```php
<?php
class Car {
    // properties
    public $color;
    public $model;

    // methods
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}
?>
```

### Creating an Object

Once you have defined a class, you can create an object from it using the `new` keyword.

```php
<?php
$myCar = new Car("black", "Volvo");
echo $myCar->message();
?>
```

## The `__construct()` Method

The `__construct()` method is a special method that is automatically called when an object is created. It is often used to initialize the properties of the object.

## Access Modifiers

Access modifiers control the visibility of properties and methods.

- **`public`:** The property or method can be accessed from anywhere.
- **`protected`:** The property or method can be accessed within the class and by classes derived from that class.
- **`private`:** The property or method can ONLY be accessed within the class.

```php
<?php
class MyClass {
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello() {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // Works
// echo $obj->protected; // Fatal Error
// echo $obj->private; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private
?>
```

## Getters and Setters

Since properties are often declared as private, you need a way to access and modify them from outside the class. This is done using getter and setter methods.

- **Getter:** A method that gets the value of a property.
- **Setter:** A method that sets the value of a property.

```php
<?php
class Person {
    private $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

$person = new Person();
$person->setName("John");
echo $person->getName();
?>
```

## Next Lesson

In the next lesson, we will explore more advanced OOP concepts, such as inheritance and polymorphism.
