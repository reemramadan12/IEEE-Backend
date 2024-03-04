# PHP
1. [What is PHP](#what-is-php)
1. [What are the three main error types in PHP](#what-are-the-three-main-error-types-in-php)
1. [Echo vs print](#echo-vs-print) 
1. [Sensitivity in PHP](#sensitivity-in-php)

----

## What is PHP?
**PHP (recursive acronym for PHP: Hypertext Preprocessor)** is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.

---
## What are the three main error types in PHP?
In **PHP**, all types of errors can be classified into three main categories: syntax errors, runtime errors, and logical errors.

- *Syntax errors*: Syntax errors are caused by mistakes in the code syntax. These errors occur when the PHP parser encounters an unexpected or incorrect statement or expression. For example, a missing semicolon or a misspelled function name can cause a syntax error.

- *Runtime errors*: Runtime errors occur during the execution of the code. These errors are usually caused by factors such as incorrect function arguments, incorrect variable types, or memory-related issues. Examples of runtime errors include division by zero, undefined function calls, or array out-of-bounds errors.

- *Logical errors*: Logical errors occur when the code does not behave as expected, even though it is syntactically and semantically correct. These errors are usually caused by incorrect or incomplete logic in the code.

---
## Echo vs. print :-
 **echo** and **print** are more or less the same. They are both used to output data to the screen.

The differences are small: **echo has no return value** while **print has a return value of 1** so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. **echo is marginally faster than print**.

---
## Sensitivity in PHP :-
- PHP is **partially case-sensitive**.
- PHP constructs, function names, class names are case-insensitive, whereas variables are case-sensitive.
- A statement ends with a semicolon (;).
- Whitespace and line breaks don’t matter in PHP; do leverage them to make the code more readable.

---
### resources :-
1. [What is PHP?](https://www.php.net/manual/en/intro-whatis.php)
1. [Three main errors in PHP.](https://www.scaler.com/topics/php-tutorial/types-of-errors-in-php/)
1. [Echo vs. print.](https://www.w3schools.com/php/php_echo_print.asp#:~:text=echo%20and%20print%20are%20more,print%20can%20take%20one%20argument.)
1. [Sensitivity in PHP.](https://www.phptutorial.net/php-tutorial/php-syntax/#:~:text=Summary-,PHP%20is%20partially%20case%2Dsensitive.,make%20the%20code%20more%20readable.)
