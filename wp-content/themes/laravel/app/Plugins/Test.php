<?php
namespace App\Plugins;

use Illuminate\Http\Response;

final class Test
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'add_admin_menu']);

    }

    public function add_admin_menu()
    {
        add_menu_page(
            'Test Options',
            'Test Options',
            'manage_options',
            'plugin-options',
            [$this, 'show_plugin_options']
        );
    }

    public function show_plugin_options()
    {
        echo view('plugins.test', [
            'test' => ['1', '2'],
        ])->render();
    }

}
