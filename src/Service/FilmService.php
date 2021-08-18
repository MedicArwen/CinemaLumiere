<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Film;
use App\Entity\ICrud;

class FilmService implements ICrud 
{
    private $entityManager;
    public function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }
    public function ajouter($pTitre,$pResume,$pAnneProduction,$pRealisateur,$pListeActeurs,$pImageUrl)
    {
        // la fonction static permet d'éviter de devoir instantier le film avec le
        // constructeur par défaut
        $film = Film::creer($pTitre,$pResume,$pAnneProduction,$pRealisateur,
        $pListeActeurs,$pImageUrl);
        $this->entityManager->persist($film);
        $this->entityManager->flush();
    }
    public function supprimer($pId)
    {

    }
    public function liste()
    {
        return $this->entityManager->getRepository(Film::class)->findAll();
    }
    public function lire($pId)
    {
        return $this->entityManager->getRepository(Film::class)->find($pId);
    }
    public function sauvegarder()
    {
        
    }
}