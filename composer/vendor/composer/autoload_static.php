<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c72673c9560365183a7c26d4ab722cf
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Estudo\\Composer\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Estudo\\Composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c72673c9560365183a7c26d4ab722cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c72673c9560365183a7c26d4ab722cf::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9c72673c9560365183a7c26d4ab722cf::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9c72673c9560365183a7c26d4ab722cf::$classMap;

        }, null, ClassLoader::class);
    }
}
