<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c7497939b05fce9e6908d9e6fe4249c
{
    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Unirest\\' => 
            array (
                0 => __DIR__ . '/..' . '/mashape/unirest-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit4c7497939b05fce9e6908d9e6fe4249c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4c7497939b05fce9e6908d9e6fe4249c::$classMap;

        }, null, ClassLoader::class);
    }
}
