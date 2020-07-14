<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ThumbnailController extends AbstractController
{
    /**
     * @Route("/thumbnail", name="thumbnail")
     */
    public function index()
    {
        return $this->render('thumbnail/index.html.twig', [
            'controller_name' => 'ThumbnailController',
        ]);
    }
}
