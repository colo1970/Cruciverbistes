<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit403c47b606a991b7392a0bc92b17a5f0
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit403c47b606a991b7392a0bc92b17a5f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit403c47b606a991b7392a0bc92b17a5f0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
