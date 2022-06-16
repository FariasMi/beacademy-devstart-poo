<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0473e3170e12b850e6e930dd84a45fce
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0473e3170e12b850e6e930dd84a45fce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0473e3170e12b850e6e930dd84a45fce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0473e3170e12b850e6e930dd84a45fce::$classMap;

        }, null, ClassLoader::class);
    }
}