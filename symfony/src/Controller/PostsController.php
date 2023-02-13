<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostsController extends AbstractController
{
    /**
     * @Route("/posts", name="posts_list")
     */
    public function index(): Response
    {
        $number = random_int(0, 100); 

        return $this->render('posts/index.html.twig', [
            'controller_name' => 'PostsController',
            'number' => $number
        ]);
    }

    /**
     * @Route("/api/posts/{id<\d+>?1}", methods={"GET","HEAD"})
     */
    public function show(int $id= 12): Response
    {
        $data = array('a' => $id, 'b' => 'dato2');
        $response = new Response();
        $response->setContent(json_encode($data));
        return $response;
    }

}
