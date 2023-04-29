<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


// Controller innutilisé 

class LostController extends AbstractController
{
    #[Route('/lost', name: 'app_lost')]
    public function lost(): Response
    {
        return $this->render('home_page/lost.html.twig', []);
    }
}
