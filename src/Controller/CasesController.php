<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CasesController extends AbstractController
{
    /**
     * @Route("/projecten", name="app_case_overview")
     * @return Response
     */
    public function caseOverview(): Response
    {
        return $this->render('index.html.twig', [
            'seo' => [
                'title' => 'Projecten overzicht',
                'description' => 'Wat zijn projecten waar ik trots op ben, en echt van heb geleerd?'
            ],
        ]);
    }

    /**
     * @Route("/projecten/symfony-sulu-cms", name="app_case_symfony")
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
     * @Route("/projecten/muzikanten-platform", name="app_case_musician_platform")
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