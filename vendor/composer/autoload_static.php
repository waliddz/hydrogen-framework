<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9835b54deb9af9014ea987f4902318a3
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'C' => 
        array (
            'Console\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/waliddz/hydrogen-console/Console',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9835b54deb9af9014ea987f4902318a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9835b54deb9af9014ea987f4902318a3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
