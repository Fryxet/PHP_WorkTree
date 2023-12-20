<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d496c30c460a435955880fd004ad5ab
{
    public static $files = array (
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grid\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grid\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d496c30c460a435955880fd004ad5ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d496c30c460a435955880fd004ad5ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2d496c30c460a435955880fd004ad5ab::$classMap;

        }, null, ClassLoader::class);
    }
}
