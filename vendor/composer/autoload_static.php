<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita28181ba03f1a5c9dd7ee574d4386a2c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita28181ba03f1a5c9dd7ee574d4386a2c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita28181ba03f1a5c9dd7ee574d4386a2c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
