<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Genre;
use App\Entity\ICrud;

class GenreService implements ICrud
{
    private $entityManager;
    public function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }
    public function ajouter($pIntitule)
    {
        $genre = Genre::create($pIntitule);
        $this->entityManager->persist($genre);
        $this->entityManager->flush();
    }
    public function liste()
    {
    
    }
    public function sauvegarder()
    {
        
    }
    public function lire($pId)
    {
        
    }
    public function supprimer($pId)
    {
        
    }
}