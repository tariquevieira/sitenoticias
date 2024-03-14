<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
	#[Route('api/news/{id}')]
	public function getNews(int $id = null): Response
	{
		$new = [
			'id' => $id,
			"titulo" => " Brasil em guerra",
			"categoria" => "Politica",
			"descricao" => "Fake news é um perigo",
			"data" => "2022-02-10",
			"imagem" => " http://example/img/example.png"
		];

		return new JsonResponse($new);
	}
}
