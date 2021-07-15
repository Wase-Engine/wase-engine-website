<?php

namespace App\Controller;

use App\Helper\GithubHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $releases = GithubHelper::getReleases();

        return $this->render('index.html.twig', [
            'releases' => array_splice($releases, 0, 2)
        ]);
    }
}
