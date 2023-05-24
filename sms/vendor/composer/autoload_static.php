<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4ee965a12e509f3027466802ed98739
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Swagger\\Client\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Swagger\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/shoutoutlabs/shoutout-sdk/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4ee965a12e509f3027466802ed98739::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4ee965a12e509f3027466802ed98739::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd4ee965a12e509f3027466802ed98739::$classMap;

        }, null, ClassLoader::class);
    }
}