<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit741ee86cac3abd40ccf63f674022851e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit741ee86cac3abd40ccf63f674022851e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit741ee86cac3abd40ccf63f674022851e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
