<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98490fbbf6aef60bc172d4a5172cddfb
{
    public static $classMap = array (
        'UserRepo\\Repositories\\Developer' => __DIR__ . '/../..' . '/app/UserRepo/Repositories/Developer.php',
        'UserRepo\\Repositories\\User' => __DIR__ . '/../..' . '/app/UserRepo/Repositories/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit98490fbbf6aef60bc172d4a5172cddfb::$classMap;

        }, null, ClassLoader::class);
    }
}
