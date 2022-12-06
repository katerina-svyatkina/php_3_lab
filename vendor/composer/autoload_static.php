<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc947907c7c26bbc6886827bcd87f9408
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc947907c7c26bbc6886827bcd87f9408::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc947907c7c26bbc6886827bcd87f9408::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc947907c7c26bbc6886827bcd87f9408::$classMap;

        }, null, ClassLoader::class);
    }
}

