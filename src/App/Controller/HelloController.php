<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function helloAction()
    {
        return $this->render('App:Hello:hello.html.twig');
    }
}
