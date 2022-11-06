# Laravel Installation

- Download [php](https://www.php.net/)
- Download [Composer](https://getcomposer.org/)
    - Windows
        - Download and install directly
    - Ubuntu
        - Run this command
            - `sudo apt install php-cli`
        - Continue installation process of [getcomposer](https://getcomposer.org/download/) for linux
        - After running above instruction you should have `composer.phar` in your working directory
        - Now you can run composer `./composer.phar`
___

- Open a Terminal and Type
    - Windows
        - `composer create-project laravel/laravel my-app`
    - Ubuntu
        - `./composer.phar create-project laravel/laravel my-app`
- Redirect to `my-app` using this command
    - `cd my-app`
- Run the application
    - `php artisan serve`
