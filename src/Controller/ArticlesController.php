<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/toegankelijkheid", name="app_article_accessibility")
     * @return Response
     */
    public function articleAccessibility(): Response
    {
        return $this->render('articles/article_accessibility.html.twig', [
            'seo' => [
                'title' => 'Toegankelijkheid is niet te onderschatten',
                'description' => 'Internet is steeds toegankelijker, toch zijn er een hoop websites nauwlijks toegankelijk. Gelukkig zijn er duidelijke richtlijnen (WCAG 2.0).'
            ],
        ]);
    }

    /**
     * @Route("/toekomstbestendig-ontwikkelen", name="app_article_future_development")
     * @return Response
     */
    public function articleFutureDevelopment(): Response
    {
        return $this->render('articles/article_development.html.twig', [
            'seo' => [
                'title' => 'Samen toekomstbestendig ontwikkelen',
                'description' => 'Door gebruik van de BEM methode samen met de regels van ATOM design voorkom je dubbele code en  alles overzichtelijk.'
            ],
        ]);
    }
}