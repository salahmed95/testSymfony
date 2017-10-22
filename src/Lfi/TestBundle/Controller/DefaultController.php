<?php

namespace Lfi\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/home/test")
     */
    public function indexAction()
    {
        return $this->render('LfiTestBundle:Default:index.html.twig');
    }
}
