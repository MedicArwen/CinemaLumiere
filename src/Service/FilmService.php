<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Film;

class FilmService
{
    private $entityManager;
    function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }
    function ajouter($pTitre,$pResume,$pAnneProduction,$pRealisateur,$pListeActeurs,$pImageUrl)
    {
        $film = Film::create($pTitre,$pResume,$pAnneProduction,$pRealisateur,
        $pListeActeurs,$pImageUrl);
        $this->entityManager->persist($film);
        $this->entityManager->flush();
    }
    function supprimer()
    {

    }
    function recupererListe()
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