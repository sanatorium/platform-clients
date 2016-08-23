<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AddClientAttributes' => $baseDir . '/database/migrations/2016_08_22_095656_add_client_attributes.php',
    'CreateClientsTable' => $baseDir . '/database/migrations/2016_04_12_171558_create_clients_table.php',
    'Sanatorium\\Clients\\Controllers\\Admin\\ClientsController' => $baseDir . '/src/Controllers/Admin/ClientsController.php',
    'Sanatorium\\Clients\\Controllers\\Frontend\\ClientsController' => $baseDir . '/src/Controllers/Frontend/ClientsController.php',
    'Sanatorium\\Clients\\Database\\Seeds\\ClientDataTableSeeder' => $baseDir . '/database/seeds/ClientDataTableSeeder.php',
    'Sanatorium\\Clients\\Handlers\\Client\\ClientDataHandler' => $baseDir . '/src/Handlers/Client/ClientDataHandler.php',
    'Sanatorium\\Clients\\Handlers\\Client\\ClientDataHandlerInterface' => $baseDir . '/src/Handlers/Client/ClientDataHandlerInterface.php',
    'Sanatorium\\Clients\\Handlers\\Client\\ClientEventHandler' => $baseDir . '/src/Handlers/Client/ClientEventHandler.php',
    'Sanatorium\\Clients\\Handlers\\Client\\ClientEventHandlerInterface' => $baseDir . '/src/Handlers/Client/ClientEventHandlerInterface.php',
    'Sanatorium\\Clients\\Models\\Client' => $baseDir . '/src/Models/Client.php',
    'Sanatorium\\Clients\\Providers\\ClientServiceProvider' => $baseDir . '/src/Providers/ClientServiceProvider.php',
    'Sanatorium\\Clients\\Repositories\\Client\\ClientRepository' => $baseDir . '/src/Repositories/Client/ClientRepository.php',
    'Sanatorium\\Clients\\Repositories\\Client\\ClientRepositoryInterface' => $baseDir . '/src/Repositories/Client/ClientRepositoryInterface.php',
    'Sanatorium\\Clients\\Validator\\Client\\ClientValidator' => $baseDir . '/src/Validator/Client/ClientValidator.php',
    'Sanatorium\\Clients\\Validator\\Client\\ClientValidatorInterface' => $baseDir . '/src/Validator/Client/ClientValidatorInterface.php',
    'Sanatorium\\Clients\\Widgets\\Client' => $baseDir . '/src/Widgets/Client.php',
);
