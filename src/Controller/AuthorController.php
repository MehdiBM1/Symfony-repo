<?php

namespace App\Controller;

use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    #[Route('/authors', name: 'app_authors')]
    public function index(AuthorRepository $authorRepository): Response
    {
        // Récupérer tous les auteurs
        $authors = $authorRepository->findAll();
        
        return $this->render('author/index.html.twig', [
            'authors' => $authors,
        ]);
    }
}