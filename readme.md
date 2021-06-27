# [![WordPress](wp-admin/images/wordpress-logo.png)](https://wordpress.org/)

# Installation
Edit wp-config.php
```php
define( 'WP_DEBUG', true );
define( 'WP_DEFAULT_THEME', 'LaravelTheme' );
```
Run CLI:
```sh
cd wp-content/themes/laravel
composer i
php artisan key:generate
```
