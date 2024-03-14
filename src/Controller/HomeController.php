<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
  #[Route("/home", methods: ['GET'])]
  public function index(LoggerInterface $logger): Response
  {
    $logger->info("Acessou a home");

    return $this->render('home/home.html.twig', [
      'name' => 'tarique',
      'categories' => $this->listaCategorias()
    ]);
  }

  #[Route("/categoria/{slug}", methods: ['GET'])]
  public function category(string $slug = null): Response
  {
    return $this->render('home/category.html.twig', [
      'pageTitle' => 'Noticias sobre ' . $slug,
      'categories' => $this->listaCategorias()
    ]);
  }

  private function listaCategorias(): array
  {
    return [
      ['title' => 'Política', 'text' => 'Noticias sobre Política'],
      ['title' => 'Automóvel', 'text' => 'Noticias sobre automovel'],
      ['title' => 'Saúde', 'text' => 'Noticias sobre politica']
    ];
  }
}
