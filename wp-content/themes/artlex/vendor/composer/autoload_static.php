<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd7c1f5f0cd0d1facdcf41fce2b122e8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd7c1f5f0cd0d1facdcf41fce2b122e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd7c1f5f0cd0d1facdcf41fce2b122e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd7c1f5f0cd0d1facdcf41fce2b122e8::$classMap;

        }, null, ClassLoader::class);
    }
}
