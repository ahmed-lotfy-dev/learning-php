
# Lesson 13: Inheritance and Polymorphism

Inheritance and polymorphism are two fundamental concepts of object-oriented programming (OOP). They allow you to create more complex and reusable code.

## Inheritance

Inheritance is a mechanism in which one class acquires the properties and methods of another class. The class that inherits from another class is called the child class, and the class from which it inherits is called the parent class.

To create a child class, you use the `extends` keyword.

```php
<?php
class Animal {
    public function makeSound() {
        echo "Some generic animal sound";
    }
}

class Dog extends Animal {
    // Dog class inherits the makeSound() method from Animal
}

$dog = new Dog();
$dog->makeSound(); // Outputs "Some generic animal sound"
?>
```

### Overriding Methods

A child class can override a method of its parent class by defining a method with the same name.

```php
<?php
class Animal {
    public function makeSound() {
        echo "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof! Woof!";
    }
}

$dog = new Dog();
$dog->makeSound(); // Outputs "Woof! Woof!"
?>
```

### The `final` Keyword

The `final` keyword can be used to prevent a class from being inherited or to prevent a method from being overridden.

```php
<?php
final class MyClass {
    // ...
}

// This will result in a fatal error
class MyOtherClass extends MyClass {
    // ...
}
?>
```

## Polymorphism

Polymorphism means "many forms". In OOP, polymorphism refers to the ability of an object to take on many forms. It is often used in combination with inheritance.

Polymorphism is achieved by using a common interface for different classes. This allows you to treat objects of different classes as if they were objects of the same class.

### Abstract Classes

An abstract class is a class that cannot be instantiated. It can only be inherited by other classes. An abstract class can contain abstract methods, which are methods that are declared but not implemented.

```php
<?php
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

$dog = new Dog();
$dog->makeSound();

$cat = new Cat();
$cat->makeSound();
?>
```

### Interfaces

An interface is similar to an abstract class, but it cannot contain any implemented methods. All methods in an interface must be abstract.

A class can implement multiple interfaces, but it can only inherit from one class.

```php
<?php
interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    public function makeSound() {
        echo "Woof! Woof!";
    }
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

$dog = new Dog();
$dog->makeSound();

$cat = new Cat();
$cat->makeSound();
?>
```

## Next Lesson

In the next lesson, you will learn about namespaces and how they help you organize your code and avoid naming conflicts.
