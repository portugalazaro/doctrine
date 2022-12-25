<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerCreator;
use Alura\Doctrine\Entity\Student;

$entityManager = EntityManagerCreator::createEntityManager();
// $studentRepository = $entityManager->getRepository(Student::class);


$student = $entityManager->getPartialReference(Student::class, $argv[1]);
$entityManager->remove($student);

$entityManager->flush();