<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ModeloController extends Controller
{
    /**
     * @Route("/modelo")
     */
    public function modeloAction()
    {
        return $this->render('modelo.html.twig'
        );
    }
}