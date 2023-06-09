<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b85d342836d7fd8786b234f794a8ae2
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'model\\' => 6,
        ),
        'c' => 
        array (
            'controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/models',
        ),
        'controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b85d342836d7fd8786b234f794a8ae2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b85d342836d7fd8786b234f794a8ae2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b85d342836d7fd8786b234f794a8ae2::$classMap;

        }, null, ClassLoader::class);
    }
}
