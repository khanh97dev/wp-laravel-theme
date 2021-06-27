<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HookProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        add_action('admin_init', [$this, 'admin_init']);
        add_action('wp_head', [$this, 'wp_head']);
    }

    public function wp_head()
    {
        ?> <meta name="token" content="<?= $_COOKIE['token'] ?? '' ?>"> <?php
    }

    public function admin_init()
    {
        $cookie = [
            'name' => 'token',
            'value' => bcrypt(wp_create_nonce('token')),
            'expires_or_options' => 0,
            'path' => '',
            'domain' => '',
            'secure' => true,
            'httponly' => true,
        ];

        setcookie(
            $cookie['name'],
            $cookie['value'],
            $cookie['expires_or_options'],
            $cookie['path'],
            $cookie['domain'],
            $cookie['secure'],
            $cookie['httponly']
        );
    }
}
