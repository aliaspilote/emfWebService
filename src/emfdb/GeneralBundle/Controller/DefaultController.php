<?php

namespace emfdb\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('emfdbGeneralBundle:Default:index.html.twig');
    }
}
