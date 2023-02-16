<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(TranslatorInterface $translator): Response
    {

        $translated = $translator->trans('Translate me symfony');
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'translated' => $translated
        ]);
    }
}
