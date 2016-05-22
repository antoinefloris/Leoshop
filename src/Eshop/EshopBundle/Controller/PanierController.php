<?php

namespace Eshop\EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function panierAction()
    {
        return $this->render('EshopBundle:Default/Panier:panier.html.twig');
    }
}
