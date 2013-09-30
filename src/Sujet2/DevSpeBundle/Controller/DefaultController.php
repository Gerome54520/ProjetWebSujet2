<?php

namespace Sujet2\DevSpeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Sujet2DevSpeBundle:Default:index.html.twig', array('name' => $name));
    }
}
