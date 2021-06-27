<?php

namespace App\Providers;

use App\Plugins\Plugin;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class PluginProvider extends ServiceProvider
{
    public function boot()
    {
        $namespace = '\\App\\Plugins';
        $path = base_path('App/Plugins');
        if (File::exists($path)) {
            $files = File::allFiles($path);
            foreach ($files as $file) {
                $className = $file->getFilenameWithoutExtension();
                $class = "$namespace\\$className";
                new $class;
            }
        }
    }
}
