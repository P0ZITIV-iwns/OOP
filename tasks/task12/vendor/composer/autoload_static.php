<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34577cea3ea2459d11334f2e3291d927
{
    public static $files = array (
        'bd74aac1ec950667de18be61081794cd' => __DIR__ . '/../..' . '/src/Point.php',
        'c85ec5f24def5bc5cf870278fa3e75b3' => __DIR__ . '/../..' . '/src/Segment.php',
        '38e272bccfb929686670fe5b6148e0a0' => __DIR__ . '/../..' . '/src/SegmentFunctions.php',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit34577cea3ea2459d11334f2e3291d927::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34577cea3ea2459d11334f2e3291d927::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34577cea3ea2459d11334f2e3291d927::$classMap;

        }, null, ClassLoader::class);
    }
}
