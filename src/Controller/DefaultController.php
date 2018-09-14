<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'seo' => [
                'title' => 'Samen een toegankelijk en betrouwbaar product ontwikkelen',
                'description' => 'Mijn naam is Martijn Schram ik ben een Front-end developer en samen kunnen we producten ontwikkelen waar we trots op zijn.'
            ],
        ]);
    }
}