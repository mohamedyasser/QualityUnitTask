<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadd89596d4dd813205c5a91f4d06108b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mohamedyasser\\App\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mohamedyasser\\App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitadd89596d4dd813205c5a91f4d06108b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadd89596d4dd813205c5a91f4d06108b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitadd89596d4dd813205c5a91f4d06108b::$classMap;

        }, null, ClassLoader::class);
    }
}
