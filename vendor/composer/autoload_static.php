<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit667bd8f9fb72deab8976c7d519cf05b2
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Serializer\\' => 29,
            'Symfony\\Component\\PropertyAccess\\' => 33,
            'Symfony\\Component\\Inflector\\' => 28,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'P' => 
        array (
            'Patterns\\' => 9,
        ),
        'G' => 
        array (
            'Game\\' => 5,
        ),
        'E' => 
        array (
            'Engine\\' => 7,
        ),
        'A' => 
        array (
            'Api\\' => 4,
            'Admin\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Serializer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/serializer',
        ),
        'Symfony\\Component\\PropertyAccess\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/property-access',
        ),
        'Symfony\\Component\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/inflector',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'Patterns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/patterns',
        ),
        'Game\\' => 
        array (
            0 => __DIR__ . '/../..' . '/game',
        ),
        'Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
        'Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
        'Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit667bd8f9fb72deab8976c7d519cf05b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit667bd8f9fb72deab8976c7d519cf05b2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
