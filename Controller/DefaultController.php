<?php

namespace Zym\Bundle\ChargeBeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZymChargeBeeBundle:Default:index.html.twig', array('name' => $name));
    }
}
