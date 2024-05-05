# OOP PHP
1. [Encapsulation and abstraction.](#encapsulation-and-abstraction)
1. [Inheritance.](#inheritance)
1. [PHP Interfaces & Polymorphism.](#php-interfaces--polymorphism)
1. [PHP Traits.](#php-traits)

---

## Encapsulation and abstraction:-
| Parameter | Encapsulation | Abstraction |
| :-------- | :------------ | :---------- |
| Process |	It is the process or method for containing information. |	It is a process or method of obtaining information. |
| Solving problem at |	During encapsulation, issues are resolved at the implementation level. |	Abstractions solve problems at the design or interface level.| 
| Focus |	The focus of encapsulation is “how” it should be done. | The focus of abstraction is “what” to do. |
| Definition |	It is a way of hiding data in a single entity or unit and a way of protecting information from the outside world. |	Abstraction is a way of hiding unnecessary information. |
| Implementation |	It can be implemented using access modifiers, i.e. private, protected, public. |	Abstract classes and interfaces can be used to implement abstractions. |
| Access |	It hides data from direct access by users (data hiding). |	Abstractions allow access to specific pieces of data. |

----
## Inheritance:-
Inheritance in OOP = **When a class derives from another class**.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the `extends` keyword.

Let's look at an example:-
```php
<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>
```
### Example Explained:-
The Strawberry class is inherited from the Fruit class.

This means that the Strawberry class can use the public `$name` and `$color` properties as well as the public `__construct()` and `intro()` methods from the Fruit class because of inheritance.

The Strawberry class also has its own method: `message()`.

-----
## PHP Interfaces & Polymorphism:-
### what is Polymorphism?

First, it is derived from the Greek words Poly (meaning many) and morph (meaning forms).

Polymorphism is simply **an OOP design pattern that allows multiple class with various functionalities to implement or share a common Interface**.

The aesthetic of polymorphism is that the code working with the different classes does not need to know which class it is using since they’re all used the same way.

**Polymorphism in PHP is implemented using the interface pattern**. Think about interface as the skeleton or blueprint for your class which implements it.
```php
interface shapesInterface{
}
 ```
The above code has an interface named shapesInterface.

An interface is similar to a class except that it cannot contain code but only method declaration and this declaration can only work with the public scope as seen below:
```php
interface shapesInterface{
    public function getArea();
}
```
An interface can define method names and arguments, but not the contents of the methods. Any class implementing an interface **must implement all methods defined by the interface**. Below are the main points of Interface:

1. An interface is defined to provide a common function name to the implementer classes.
1. Different implementing classes can implement those interfaces according to their requirements.
1. You can say, interfaces are skeletons which are implemented by developers.

-----
## PHP Traits:-
PHP implements a way to reuse code called Traits.

Traits are **a mechanism for code reuse in single inheritance languages such as PHP**. A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies. The semantics of the combination of Traits and classes is defined in a way which reduces complexity, and avoids the typical problems associated with multiple inheritance and Mixins.

A Trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way. It is not possible to instantiate a Trait on its own. It is an addition to traditional inheritance and enables horizontal composition of behavior; that is, the application of class members without requiring inheritance.

### Example:-
```php
<?php
trait ezcReflectionReturnInfo {
    function getReturnType() { /*1*/ }
    function getReturnDescription() { /*2*/ }
}

class ezcReflectionMethod extends ReflectionMethod {
    use ezcReflectionReturnInfo;
    /* ... */
}

class ezcReflectionFunction extends ReflectionFunction {
    use ezcReflectionReturnInfo;
    /* ... */
}
?>
```
-----
## Resources:-
1. [Encapsulation & Abstraction.](https://www.shiksha.com/online-courses/articles/difference-between-encapsulation-and-abstraction/#Difference-between-encapsulation-and-abstraction)
1. [Inheritance.](https://www.w3schools.com/php/php_oop_inheritance.asp)
1. [PHP Interfaces & Polymorphism.](https://medium.com/@iamjoestack/understanding-polymorphism-in-php-3d2670deb6e1#:~:text=Polymorphism%20in%20PHP%20is%20implemented,your%20class%20which%20implements%20it.&text=The%20above%20code%20has%20an%20interface%20named%20shapesInterface.&text=An%20interface%20can%20define%20method,the%20contents%20of%20the%20methods.)
1. [PHP Traits.](https://www.php.net/manual/en/language.oop5.traits.php)
