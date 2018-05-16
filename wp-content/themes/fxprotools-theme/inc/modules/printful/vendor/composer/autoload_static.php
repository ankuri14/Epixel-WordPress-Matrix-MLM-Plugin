<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6275fdef6578ac864989ddba3984f850
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Printful\\Tests\\' => 15,
            'Printful\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Printful\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Printful\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6275fdef6578ac864989ddba3984f850::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6275fdef6578ac864989ddba3984f850::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}