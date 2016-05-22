<?php

namespace Eshop\EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategorieController extends Controller
{
    public function hommeAction()
    {
        return $this->render('EshopBundle:Default/Categorie:men.html.twig');
    }

    public function femmeAction()
    {
        return $this->render('EshopBundle:Default/Categorie:woman.html.twig');
    }

    public function enfantAction()
    {
        return $this->render('EshopBundle:Default/Categorie:kid.html.twig');
    }
}
