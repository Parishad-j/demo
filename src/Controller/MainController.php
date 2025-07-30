<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name:'main_home', methods: ['GET'])]
    public function  home() : Response{
        return $this->render('main/home.html.twig');
    }

    #[Route('/test', name:'main_test', methods: ['GET'])]
    public function  test() : Response{


        $serie= [
            'title'=> '<b>Geme of thrones</b>',
        'year'=>'2010',
        ];
        $autreVar=1234;

        /*return $this->render('main/test.html.twig',[
        'serie'=>$serie,
        'autreVar'=>$autreVar
        ]);*/
        return $this->render('main/test.html.twig', compact('serie',
            'autreVar')
        );
    }



}