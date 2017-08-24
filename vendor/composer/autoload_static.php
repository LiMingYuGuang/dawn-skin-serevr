<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit422bc125ab9b845f3949640018b561a3
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'XDO\\' => 4,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
            'MinecraftSkins\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'XDO\\' => 
        array (
            0 => __DIR__ . '/..' . '/xtlsoft/xdo',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'MinecraftSkins\\' => 
        array (
            0 => __DIR__ . '/..' . '/games647/minecraft-skin-renderer/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/league/color-extractor/src',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'claviska' => 
            array (
                0 => __DIR__ . '/..' . '/abeautifulsite/simpleimage/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit422bc125ab9b845f3949640018b561a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit422bc125ab9b845f3949640018b561a3::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit422bc125ab9b845f3949640018b561a3::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit422bc125ab9b845f3949640018b561a3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
