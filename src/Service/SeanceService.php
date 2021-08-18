<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Seance;
use App\Entity\ICrud;

class SeanceService implements ICrud
{
    private $entityManager;
    public function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }
    public function ajouter($pDateDebut, $pDateFin, $pNumeroSalle, $pFilm)
    {

        $seance = Seance::creer($pDateDebut, $pDateFin, $pNumeroSalle, $pFilm);

        $this->entityManager->persist($seance);
        $this->entityManager->flush();
    }
    public function liste()
    {
        return $this->entityManager->getRepository(Seance::class)->findAll();
    }
    public function sauvegarder()
    {
    }
    public function lire($pId)
    {
        return $this->entityManager->getRepository(Seance::class)->find($pId);
    }
    public function supprimer($pId)
    {
    }
}
