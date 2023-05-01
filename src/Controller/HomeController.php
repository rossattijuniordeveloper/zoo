<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function  index():Response
    {
        $users = [
            ['name'=>'Fulano de tal 001','telefone'=>'67 1111-1111'],
            ['name'=>'Fulano de tal 002','telefone'=>'67 2222-2222'],
            ['name'=>'Fulano de tal 003','telefone'=>'67 3333-3333'],
            ['name'=>'Fulano de tal 004','telefone'=>'67 4444-4444'],
            ['name'=>'Fulano de tal 005','telefone'=>'67 5555-5555'],
            ['name'=>'Fulano de tal 006','telefone'=>'67 6666-6666'],
        ];

        return $this->render('hello/homepage.html.twig',[
            'title'=>'Zoológico',
            'users'=>$users,
        ]);
    }

    #[Route('/animal/{slug}')]
    public function  animal( string $slug=null):Response
    {
        $newSlug = str_replace('-',' ',$slug);
        $newSlug = u($newSlug)->title(true);
        return new Response('Olá '.$newSlug.' ! ');

    }

}
