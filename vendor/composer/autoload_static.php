<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8a81735483b6711c742ea7530fe7d80
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Freshwork\\Transbank\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Freshwork\\Transbank\\' => 
        array (
            0 => __DIR__ . '/..' . '/freshwork/transbank/src',
        ),
    );

    public static $classMap = array (
        'SoapValidation' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/soap-validation.php',
        'WSSESoap' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/soap-wsse.php',
        'XMLSecEnc' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/xmlseclibs.php',
        'XMLSecurityDSig' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/xmlseclibs.php',
        'XMLSecurityKey' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/xmlseclibs.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8a81735483b6711c742ea7530fe7d80::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8a81735483b6711c742ea7530fe7d80::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8a81735483b6711c742ea7530fe7d80::$classMap;

        }, null, ClassLoader::class);
    }
}