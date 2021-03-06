<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // app_login_login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\LoginController::loginAction',  '_route' => 'app_login_login',);
        }

        // app_modelo_modelo
        if ('/modelo' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ModeloController::modeloAction',  '_route' => 'app_modelo_modelo',);
        }

        // app_principal_principal
        if ('/principal' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\PrincipalController::principalAction',  '_route' => 'app_principal_principal',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
