<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SitioBundle:Default:index.html.twig');
    }
}
