<?php

namespace App\Controller;

use App\Entity\Film;
use App\Service\GenreService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Genre;
use App\Entity\Seance;
use App\Form\FilmFormType;
use App\Form\GenreFormType;
use App\Form\SeanceFormType;
use App\Service\FilmService;
use App\Service\SeanceService;

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
    public function creerGenres(GenreService $pGenreService):Response
    {
        $genre = new Genre();
        $formulaire = $this->createForm(GenreFormType::class,$genre);
        return $this->render('administration/genres/form_genres.html.twig', [
            'formulaire' => $formulaire->createView()]);
        }
/**
 * @Route("administration/films/add", name="admin_creer_film")
 */
        public function creerFilms(FilmService $pFilmService)
        {
            $film = new Film();
            $formulaire = $this->createForm(FilmFormType::class,$film);
            return $this->render('administration/films/form_films.html.twig',
            ['formulaire' => $formulaire->createView()]);
        }
/**
 * @Route("administration/seances/add", name="admin_creer_seance")
 */
        public function creerSeances(SeanceService $pSeanceService)
    {
        $seance = new Seance();
        $formulaire = $this->createForm(SeanceFormType::class,$seance);
        return $this->render('administration/seances/form_seances.html.twig',
        ['formulaire' => $formulaire->createView()]);
    }
}
