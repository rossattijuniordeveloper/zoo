<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route('/')]
    public function  index():Response
    {
        return new Response('Olá Mundo ! ');
    }

    #[Route('/dinossauro')]
    public function  dinossauro():Response
    {
        return new Response('Olá Dino ! ');
    }

}