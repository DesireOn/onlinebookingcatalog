<?php

namespace App\Controller;

use App\Repository\AuthorRepository;
use App\Repository\BookRepository;
use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_index', methods: ['GET'])]
    public function index(
        BookRepository $bookRepository,
        AuthorRepository $authorRepository,
        GenreRepository $genreRepository
    ): Response
    {
        return $this->render('main/index.html.twig', [
            'books' => $bookRepository->findBy([], ['title' => 'ASC'], 4),
            'authors' => $authorRepository->findBy([], ['name' => 'ASC'], 3),
            'genres' => $genreRepository->findBy([], ['title' => 'ASC'], 4),
        ]);
    }
}
