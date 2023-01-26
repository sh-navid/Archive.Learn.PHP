# PHP Instructor
- ***Disclaimer: The content of this repository is provided only for the purpose of teaching students and with an educational perspective.***

## Good to know
- PHP Stands for **"Hypertext Preprocessor"**
- For quick run of scripts:
    - You can use ***VSCode*** + ***A code runner extension***.

## Run simple PHP example
- ** [Simple SSR Example](php/examples/example-01.php)
    - `php -S 0.0.0.0:8000 example-01.php`
- ** [Simple CSR Client](php/examples/example-02.html), [CSR Server](php/examples/example-02.php)
    - `php -S 0.0.0.0:8000 example-02.php`
- [File uploader form](php/examples/example-03.html), [File uploader service](php/examples/example-03.php)
- [Captcha Generator](php/examples/example-04.php)
- ** Example of simple website without router (OldSchool)

## Headings
- [Output](php/concepts/output/README.md)
- [Syntax](php/syntax/README.md)
- ** [DataTypes](php/concepts/datatypes/README.md)
    - ** [Array](php/concepts/datatypes/array/README.md)
    - ** [String](php/concepts/datatypes/string/README.md)
- [Function](php/concepts/function/README.md)
- [Scope](php/concepts/scope/README.md)
- [Math](php/concepts/math/math.php)
- [JSON](php/concepts/other/json.php)
- [Loop](php/concepts/loop/README.md)
- [Operators](php/concepts/operators/README.md)
- [GD](php/concepts/gd/README.md)
- [Constant](php/concepts/constant/README.md)
- [Condition](php/concepts/condition/README.md)
- [Superglobals](php/concepts/superglobals/README.md)
- isset, unset
- [Include](php/concepts/include/README.md)
- [Database](php/concepts/db/README.md)
- ** [Object Oriented](php/concepts/oop/README.md)
- ** [Namespace](php/concepts/namespace/README.md)
- ** [File](php/concepts/file/README.md)
- XML
- Filter
- Callback
- Exception
- DateTime
- ** [RegularExpression](php/concepts/regex/README.md)

# Laravel Framework
- Latest version [9.x](https://laravel.com/docs/9.x)
- What we have in this framework?
    - Dependency Injection
    - Unit Testing
    - Template Engine (Blade)
    - ...
- [Installation](laravel/install/README.md)
- [Database Configuration](laravel/database/README.md)

### Important
- Your `.env` file should not be committed to your application's source control <small><sup>[***[Laravel Docs 10/29/2022](https://laravel.com/docs/9.x)***]<sup></small>