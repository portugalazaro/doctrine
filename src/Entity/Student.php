<?php

namespace Alura\Doctrine\Entity;

use Doctrine\ORM\Mapping\{Entity,Column,GeneratedValue,Id};

#[Entity] //Atributo para o doctrine reconhecer que a classe é uma entidade a ser mapeada

class Student
{

    #[Id]
    #[GeneratedValue]
    #[Column]
    public int $id;


    public function __construct(
        #[column]
        public readonly string $name
    ) {
     
    }

    
}