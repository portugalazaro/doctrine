<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator 
{
    public static function createEntityManager()
    {
        // Create a simple "default" Doctrine ORM configuration for Attributes
        $config = ORMSetup::createAttributeMetadataConfiguration(
            [__DIR__."/src"],
            true,
        );

        // database configuration parameters
        $conn = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../../db.sqlite',
        ];

        // obtaining the entity manager
        $entityManager = EntityManager::create($conn, $config);


    }


}