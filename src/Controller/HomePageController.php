<?php

namespace App\Controller;

use App\Repository\ExcuseRepository;
use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(ExcuseRepository $excuseRepository, TagRepository $tagRepository): Response
    {
        $excuses = $excuseRepository->findAll();
        $tags = $tagRepository->findAll();

        return $this->render('home_page/index.html.twig', [
            'excuses' => $excuses,
            'tags' => $tags
        ]);
    }

    #[Route('/{slug}', name: 'app_http_code')]
    public function httpCode(ExcuseRepository $excuseRepository, string $slug): Response
    {
        if ($slug != "lost") {
            $excuse = $excuseRepository->findOneBy(['http_code' => $slug]);

            return $this->render('home_page/slug.html.twig', [
                'excuse' => $excuse
            ]);
        } else {
            return $this->render('home_page/lost.html.twig', []);
        }
    }
}
