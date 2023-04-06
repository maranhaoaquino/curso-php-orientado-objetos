<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit190cdf2e1a45cf7367e079a87686a651
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit190cdf2e1a45cf7367e079a87686a651::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit190cdf2e1a45cf7367e079a87686a651::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit190cdf2e1a45cf7367e079a87686a651::$classMap;

        }, null, ClassLoader::class);
    }
}
