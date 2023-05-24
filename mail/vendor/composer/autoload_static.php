<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1db352d3f95d0aaeaf3337e18035111
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1db352d3f95d0aaeaf3337e18035111::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1db352d3f95d0aaeaf3337e18035111::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc1db352d3f95d0aaeaf3337e18035111::$classMap;

        }, null, ClassLoader::class);
    }
}