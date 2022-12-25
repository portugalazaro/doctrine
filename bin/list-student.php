<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerCreator;
use Alura\Doctrine\Entity\Student;

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

$listStudents = $studentRepository->findAll();

foreach($listStudents as $student) {
    echo $student->id . ' ' . $student->name . "\n";
}

// busca pelo Id
$student =  $studentRepository->find(2);
echo "------------------------\n";
    echo $student->name . "\n";
echo "------------------------\n";

// Busca todos os registro com o name Lázaro Portugal
$student = $studentRepository->findBy(['name' => 'Lázaro Portugal']);
print_r($student);
echo "------------------------\n";

// Busca somente 1
$student = $studentRepository->findOneBy(['name'=>'Lázaro Portugal']);

echo $student->name;