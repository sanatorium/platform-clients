<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite33166101326133acbec5d70895ec721
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sanatorium\\Clients\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sanatorium\\Clients\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'AddClientAttributes' => __DIR__ . '/../..' . '/database/migrations/2016_08_22_095656_add_client_attributes.php',
        'CreateClientsTable' => __DIR__ . '/../..' . '/database/migrations/2016_04_12_171558_create_clients_table.php',
        'Sanatorium\\Clients\\Controllers\\Admin\\ClientsController' => __DIR__ . '/../..' . '/src/Controllers/Admin/ClientsController.php',
        'Sanatorium\\Clients\\Controllers\\Frontend\\ClientsController' => __DIR__ . '/../..' . '/src/Controllers/Frontend/ClientsController.php',
        'Sanatorium\\Clients\\Database\\Seeds\\ClientDataTableSeeder' => __DIR__ . '/../..' . '/database/seeds/ClientDataTableSeeder.php',
        'Sanatorium\\Clients\\Handlers\\Client\\ClientDataHandler' => __DIR__ . '/../..' . '/src/Handlers/Client/ClientDataHandler.php',
        'Sanatorium\\Clients\\Handlers\\Client\\ClientDataHandlerInterface' => __DIR__ . '/../..' . '/src/Handlers/Client/ClientDataHandlerInterface.php',
        'Sanatorium\\Clients\\Handlers\\Client\\ClientEventHandler' => __DIR__ . '/../..' . '/src/Handlers/Client/ClientEventHandler.php',
        'Sanatorium\\Clients\\Handlers\\Client\\ClientEventHandlerInterface' => __DIR__ . '/../..' . '/src/Handlers/Client/ClientEventHandlerInterface.php',
        'Sanatorium\\Clients\\Models\\Client' => __DIR__ . '/../..' . '/src/Models/Client.php',
        'Sanatorium\\Clients\\Providers\\ClientServiceProvider' => __DIR__ . '/../..' . '/src/Providers/ClientServiceProvider.php',
        'Sanatorium\\Clients\\Repositories\\Client\\ClientRepository' => __DIR__ . '/../..' . '/src/Repositories/Client/ClientRepository.php',
        'Sanatorium\\Clients\\Repositories\\Client\\ClientRepositoryInterface' => __DIR__ . '/../..' . '/src/Repositories/Client/ClientRepositoryInterface.php',
        'Sanatorium\\Clients\\Validator\\Client\\ClientValidator' => __DIR__ . '/../..' . '/src/Validator/Client/ClientValidator.php',
        'Sanatorium\\Clients\\Validator\\Client\\ClientValidatorInterface' => __DIR__ . '/../..' . '/src/Validator/Client/ClientValidatorInterface.php',
        'Sanatorium\\Clients\\Widgets\\Client' => __DIR__ . '/../..' . '/src/Widgets/Client.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite33166101326133acbec5d70895ec721::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite33166101326133acbec5d70895ec721::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite33166101326133acbec5d70895ec721::$classMap;

        }, null, ClassLoader::class);
    }
}
