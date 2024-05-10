# OOP PHP
1. [Encapsulation and abstraction.](#encapsulation-and-abstraction)
1. [Inheritance.](#inheritance)
1. [PHP Interfaces & Polymorphism.](#php-interfaces--polymorphism)
1. [PHP Traits.](#php-traits)
1. [Error Handling In PHP.](#error-handling-in-php)
1. [Late Static Binding & How It Works.](#late-static-binding--how-it-works)
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
----
## Error Handling In PHP:-
Error handling in PHP is simple. An error message with filename, line number and a message describing the error is sent to the browser.

When creating scripts and web applications, error handling is an important part. **If your code lacks error checking code, your program may look very unprofessional and you may be open to security risks**.


One of the error handling methods is the **Simple "die()" statements**.

### Example :-
```php
<?php
$file=fopen("mytestfile.txt","r");
?>
```
If the file does not exist you might get an error like this:-
<br>
**Warning: fopen(mytestfile.txt) [function.fopen]: failed to open stream: No such file or directory in C:\webfolder\test.php on line 2**
<br>

To prevent the user from getting an error message like the one above, we test whether the file exist before we try to access it.

### Example :-
```php
<?php
if(file_exists("mytestfile.txt")) {
  $file = fopen("mytestfile.txt", "r");
} else {
  die("Error: The file does not exist.");
}
?>
```
Now if the file does not exist you get an error like this:

**Error: The file does not exist.**

The code above is more efficient than the earlier code, because it uses a simple error handling mechanism to stop the script after the error.

-----
## Late Static Binding & How It Works:-
PHP implements a feature called late static bindings which can be used **to reference the called class in a context of static inheritance**.

More precisely, late static bindings work by storing the class named in the last "non-forwarding call". In case of static method calls, this is the class explicitly named (usually the one on the left of the `::` operator); in case of non static method calls, it is the class of the object. A "forwarding call" is a static one that is introduced by `self::`, `parent::`, `static::`, or, if going up in the class hierarchy, `forward_static_call()`. The function `get_called_class()` can be used to retrieve a string with the name of the called class and `static::` introduces its scope.

This feature was named "late static bindings" with an internal perspective in mind. **"Late binding" comes from the fact that `static::` will not be resolved using the class where the method is defined but it will rather be computed using runtime information**. It was also called a "static binding" as it can be used for (but is not limited to) static method calls.

### Limitations of `self::` :- 
Static references to the current class like `self::` or `__CLASS__` are resolved using the class in which the function belongs, as in where it was defined:

#### Example #1 `self::` usage :-
```php
<?php
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();
?> 
```
The above example will output: **A** <br>
### Late Static Bindings' usage:-
Late static bindings tries to solve that limitation **by introducing a keyword that references the class that was initially called at runtime**. Basically, a keyword that would allow referencing *B* from `test()` in the previous example. It was decided not to introduce a new keyword but rather use static that was already reserved.

#### Example #2 `static::` simple usage :-
```php
<?php
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who(); // Here comes Late Static Bindings
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();
?>
```
The above example will output: **B**

-----
## Resources:-
1. [Encapsulation & Abstraction.](https://www.shiksha.com/online-courses/articles/difference-between-encapsulation-and-abstraction/#Difference-between-encapsulation-and-abstraction)
1. [Inheritance.](https://www.w3schools.com/php/php_oop_inheritance.asp)
1. [PHP Interfaces & Polymorphism.](https://medium.com/@iamjoestack/understanding-polymorphism-in-php-3d2670deb6e1#:~:text=Polymorphism%20in%20PHP%20is%20implemented,your%20class%20which%20implements%20it.&text=The%20above%20code%20has%20an%20interface%20named%20shapesInterface.&text=An%20interface%20can%20define%20method,the%20contents%20of%20the%20methods.)
1. [PHP Traits.](https://www.php.net/manual/en/language.oop5.traits.php)
1. [Error Handling In PHP.](https://www.w3schools.com/php/php_error.asp)
1. [Late Static Binding & How It Works.](https://www.php.net/manual/en/language.oop5.late-static-bindings.php#:~:text=PHP%20implements%20a%20feature%20called,%22non%2Dforwarding%20call%22.)