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

    #[Route('/mamiferos')]
    public function  mamiferos():Response
    {
        return new Response('Olá Mamíferos ! ');
    }

    #[Route('/invertebrardos')]
    public function  invertebrados()
    {
        return new  Response('Olá Invertebrados! ');
    }
    #[Route('/insetos')]
    public function insetos():Response
    {
        return new Response('Olá Insetos!');
    }
    #[Route('/aves')]
    public function aves():Response
    {
        return new Response('Olá Aves!');
    }
    #[Route('/felinos')]
    public function felinos():Response
    {
        return new Response('Olá Felinos!');
    }
    #[Route('/peixes')]
    public function peixes():Response
    {
        return new Response('Olá Peixes !, espero que voces não sejam traíras ;)');
    }
    #[Route('/cats')]
    public function cats():Response
    {
        return new Response('Olá (Cats) Felinos!');
    }

    #[Route('/dogs')]
    public function dogs():Response
    {
        return new Response('Olá (Dogs) Canídeos!');
    }


}