<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4d4ed48306c8429c4337a2f944aac6f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4d4ed48306c8429c4337a2f944aac6f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4d4ed48306c8429c4337a2f944aac6f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
