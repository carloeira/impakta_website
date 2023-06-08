<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ExcelController extends AbstractController
{
    public function excel() : Response
    {
        return new Response('<h1>Esta página detalha o cronograma do curso de Excel</h1>');
    }
    
    public function helloname($name) : Response
    {
        return new Response('<h1>Hello '. $name .'</h1>');
    }
}