<?php


require_once "vendor/autoload.php";
use Alura\Doctrine\Helper\EntityManagerCreator;
$entityMenager =  EntityManagerCreator::createEntityManager();


print_r($entityMenager);
