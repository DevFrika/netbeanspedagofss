<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MyAppController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestBundle:MyApp:index.html.twig');
    }
}
