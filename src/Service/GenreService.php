<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class GenreService
{
    private $entityManager;
    public function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }
    
}