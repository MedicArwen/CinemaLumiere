<?php

namespace App\Controller;

use App\Service\GenreService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
}
