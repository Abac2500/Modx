<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit342ec17943027250082a7957c4807539
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'ModxPro\\PdoTools\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ModxPro\\PdoTools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'F' => 
        array (
            'Fenom\\' => 
            array (
                0 => __DIR__ . '/..' . '/fenom/fenom/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Fenom' => __DIR__ . '/..' . '/fenom/fenom/src/Fenom.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit342ec17943027250082a7957c4807539::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit342ec17943027250082a7957c4807539::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit342ec17943027250082a7957c4807539::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit342ec17943027250082a7957c4807539::$classMap;

        }, null, ClassLoader::class);
    }
}
