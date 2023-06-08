<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index() : Response
    {
        $data['titulo'] = 'Página de teste';
        $data['cursos'] = ['Excel', 'Power BI', 'Programação Web'];
        return $this->render('home/index.html.twig', $data);
    }

}