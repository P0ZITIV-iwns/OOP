<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc73be021fe70992ae9df59b1df515a88
{
    public static $files = array (
        '54a744e052515bb42a50967146040ed8' => __DIR__ . '/../..' . '/src/PointFunctions.php',
    );

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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc73be021fe70992ae9df59b1df515a88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc73be021fe70992ae9df59b1df515a88::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc73be021fe70992ae9df59b1df515a88::$classMap;

        }, null, ClassLoader::class);
    }
}
