<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcbcfca17028bb85daa877450c1924f7a
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcbcfca17028bb85daa877450c1924f7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcbcfca17028bb85daa877450c1924f7a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
