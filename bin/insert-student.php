<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerCreator;
use Alura\Doctrine\Entity\Student;

$entityManager = EntityManagerCreator::createEntityManager();

$aluno = new Student($argv[1]);


$entityManager->persist($aluno);
$entityManager->flush();