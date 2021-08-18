<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class FilmService
{
    private $entityManager;
    function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }
    function ajouter()
    {
        
    }
    function supprimer()
    {

    }
    function recupererListe()
    {

    }
    function recupererFilm()
    {

    }
    function sauvegarder()
    {
        
    }
}