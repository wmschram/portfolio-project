<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CasesController extends AbstractController
{
    /**
     * @Route("/symfony-sulu-cms", name="app_case_symfony")
     * @return Response
     */
    public function caseSymfonySuluCMS(): Response
    {
        return $this->render('cases/case_medical.html.twig', [
            'seo' => [
                'title' => 'Symfony + optimalisatie',
                'description' => 'Symfony is een open-source en professioneel framework om op te bouwen, en kan razend snel zijn.'
            ],
        ]);
    }

    /**
     * @Route("/muzikanten-platform", name="app_case_musician_platform")
     * @return Response
     */
    public function caseMusicianPlatform(): Response
    {
        return $this->render('cases/case_musician.html.twig', [
            'seo' => [
                'title' => 'Muzikanten platform',
                'description' => 'Een platform voor muzikanten en artiesten om zichzelf te profileren in vorm van hun eigen promotie pagina’s.'
            ],
        ]);
    }
}