<?php

namespace App\Utils;

class Autoloader
{
    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload($class)
    {
        $class = str_replace('App', '', $class);
//        $class = str_replace('\\', '/', $class);
        $class =  __DIR__. '/../' . str_replace('\\', '/', $class) . '.php';
        require str_replace('//', '/', $class);
        var_dump(str_replace('//', '/', $class));
    }
}