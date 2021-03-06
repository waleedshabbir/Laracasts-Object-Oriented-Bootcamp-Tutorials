<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ea7fc013741b84812c9b6d43b832a94
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ea7fc013741b84812c9b6d43b832a94::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ea7fc013741b84812c9b6d43b832a94::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
