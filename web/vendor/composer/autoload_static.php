<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7cd844a65e7128600956249525aae622
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rborges\\Web\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rborges\\Web\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7cd844a65e7128600956249525aae622::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7cd844a65e7128600956249525aae622::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7cd844a65e7128600956249525aae622::$classMap;

        }, null, ClassLoader::class);
    }
}
