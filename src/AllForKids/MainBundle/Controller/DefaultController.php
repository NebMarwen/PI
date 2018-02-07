<?php

namespace AllForKids\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AllForKidsMainBundle:Default:index.html.twig');
    }
}
