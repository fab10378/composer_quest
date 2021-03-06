<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30358cdd31c9806e3dbfb9bff19fade9
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\wcs\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\wcs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/wcs',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30358cdd31c9806e3dbfb9bff19fade9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30358cdd31c9806e3dbfb9bff19fade9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit30358cdd31c9806e3dbfb9bff19fade9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
