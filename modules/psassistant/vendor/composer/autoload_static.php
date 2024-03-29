<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbfb18fdac58f962947977354f6b8ff0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrestaShop\\Module\\Assistant\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrestaShop\\Module\\Assistant\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'AdminPsAssistantConnectController' => __DIR__ . '/../..' . '/controllers/admin/AdminPsAssistantConnectController.php',
        'AdminPsAssistantSettingsController' => __DIR__ . '/../..' . '/controllers/admin/AdminPsAssistantSettingsController.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PrestaShop\\Module\\Assistant\\Api\\Dispatch' => __DIR__ . '/../..' . '/src/Api/Dispatch.php',
        'PrestaShop\\Module\\Assistant\\Api\\MakeCurl' => __DIR__ . '/../..' . '/src/Api/MakeCurl.php',
        'PrestaShop\\Module\\Assistant\\Api\\SendError' => __DIR__ . '/../..' . '/src/Api/SendError.php',
        'PrestaShop\\Module\\Assistant\\Controller\\Admin\\AccessBoProcess' => __DIR__ . '/../..' . '/src/Controller/Admin/AccessBoProcess.php',
        'PrestaShop\\Module\\Assistant\\Controller\\Admin\\EmployeeLib' => __DIR__ . '/../..' . '/src/Controller/Admin/EmployeeLib.php',
        'PrestaShop\\Module\\Assistant\\Controller\\PhpPsInfo' => __DIR__ . '/../..' . '/src/Controller/PhpPsInfo.php',
        'PrestaShop\\Module\\Assistant\\Security\\Antispam' => __DIR__ . '/../..' . '/src/Security/Antispam.php',
        'PrestaShop\\Module\\Assistant\\Security\\Verify' => __DIR__ . '/../..' . '/src/Security/Verify.php',
        'PsAssistant' => __DIR__ . '/../..' . '/psassistant.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdbfb18fdac58f962947977354f6b8ff0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdbfb18fdac58f962947977354f6b8ff0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdbfb18fdac58f962947977354f6b8ff0::$classMap;

        }, null, ClassLoader::class);
    }
}
