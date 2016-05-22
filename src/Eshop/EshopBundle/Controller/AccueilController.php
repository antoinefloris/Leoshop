<?php

namespace Eshop\EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function accueilAction()
    {
        return $this->render('EshopBundle:Default:index.html.twig');
    }
}
