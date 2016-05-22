<?php

namespace Eshop\EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MentionController extends Controller
{

    public function deliveryAction()
    {
        return $this->render('EshopBundle:Default/Mention:delivery.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('EshopBundle:Default/Mention:about.html.twig');
    }

    public function contactAction()
    {
        return $this->render('EshopBundle:Default/Mention:contact.html.twig');
    }
}
