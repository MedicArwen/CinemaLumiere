<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Film;
use App\Entity\ICrud;

class FilmService implements ICrud 
{
    private $entityManager;
    function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }
    function ajouter($pTitre,$pResume,$pAnneProduction,$pRealisateur,$pListeActeurs,$pImageUrl)
    {
        /*$film = Film::create($pTitre,$pResume,$pAnneProduction,$pRealisateur,
        $pListeActeurs,$pImageUrl);*/
        $film = new Film();
        $this->entityManager->persist($film);
        $this->entityManager->flush();
    }
    function supprimer($pId)
    {

    }
    function liste()
    {
        return $this->entityManager->getRepository(Film::class)->findAll();
    }
    function lire($pId)
    {
        return $this->entityManager->getRepository(Film::class)->find($pId);
    }
    function sauvegarder()
    {
        
    }
}