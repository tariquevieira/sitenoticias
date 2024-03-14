<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
  #[Route('/teste')]
  public function index(): Response
  {
    return $this->render('hello/homepage.html.twig', [
      'name' => 'novo curso'
    ]);
  }

  #[Route('/test2')]
  public function index2(): Response
  {
    return new Response('olá mundo, tarique');
  }
}
