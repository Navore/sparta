<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PrincipalController extends Controller
{
    /**
     * @Route("/principal")
     */
    public function principalAction()
    {
        return $this->render('page/principal.html.twig'
        //return $this->render('index.html'
        );
    }
}