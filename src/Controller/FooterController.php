<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FooterController extends AbstractController
{
    #[Route('/Mention/Légale', name: 'app_footer')]
    public function index(): Response
    {
        return $this->render('footer/droit.html.twig', [
            'controller_name' => 'FooterController',
        ]);
    }
}
