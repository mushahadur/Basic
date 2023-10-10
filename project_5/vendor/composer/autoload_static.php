<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1a6fd147d716fd3c4b3ff5ed8d99a74
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite1a6fd147d716fd3c4b3ff5ed8d99a74::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1a6fd147d716fd3c4b3ff5ed8d99a74::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1a6fd147d716fd3c4b3ff5ed8d99a74::$classMap;

        }, null, ClassLoader::class);
    }
}
