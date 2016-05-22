<?php

namespace Eshop\EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller
{
    public function produitAction()
    {
        return $this->render('EshopBundle:Default/Produit:produit.html.twig');
    }
}
