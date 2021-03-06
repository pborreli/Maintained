<?php

use DI\ContainerBuilder;

$builder = new ContainerBuilder();

$builder->addDefinitions(__DIR__ . '/config/config.php');
if (file_exists(__DIR__ . '/config/parameters.php')) {
    $builder->addDefinitions(__DIR__ . '/config/parameters.php');
}

return $builder->build();
