<?php

namespace App\Controller;

use App\Service\GenreService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Genre;
use App\Form\GenreFormType;

class AdministrationController extends AbstractController
{
    /**
     * @Route("/administration", name="administration")
     */
    public function index(): Response
    {
        return $this->render('administration/index.html.twig', [
            'controller_name' => 'AdministrationController'
        ]);
    }
    /**
     * @Route("administration/genres",name="admin_liste_genres")
     */
    public function listeGenres(GenreService $genreService):Response
    {
        $genres = $genreService->liste();
        return $this->render('administration/genres/liste_genres.html.twig', [
            'genres' => $genres
        ]);
    }
    /**
     * @Route("administration/genres/add",name="admin_creer_genre")
     */
    public function creerGenres(GenreService $genreService):Response
    {
        $genre = new Genre();
        $formulaire = $this->createForm(GenreFormType::class,$genre);
        return $this->render('administration/genres/form_genres.html.twig', [
            'formulaire' => $formulaire->createView()]);
        }
}
