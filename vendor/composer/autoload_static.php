<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80d99e8f2b83b43afe84f47304d4c960
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80d99e8f2b83b43afe84f47304d4c960::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80d99e8f2b83b43afe84f47304d4c960::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
