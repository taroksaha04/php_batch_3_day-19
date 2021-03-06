<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc53cce0aac81fed41200b198b6944ee0
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc53cce0aac81fed41200b198b6944ee0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc53cce0aac81fed41200b198b6944ee0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc53cce0aac81fed41200b198b6944ee0::$classMap;

        }, null, ClassLoader::class);
    }
}
