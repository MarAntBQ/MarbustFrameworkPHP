<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d7bbd3191d3f911936f2c13b3fc43b6
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d7bbd3191d3f911936f2c13b3fc43b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d7bbd3191d3f911936f2c13b3fc43b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d7bbd3191d3f911936f2c13b3fc43b6::$classMap;

        }, null, ClassLoader::class);
    }
}
