<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // sujet2devspe_homepage
        if ($pathinfo === '/acceuil') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::indexAction',  '_route' => 'sujet2devspe_homepage',);
        }

        if (0 === strpos($pathinfo, '/Creation/phase')) {
            // sujet2devspe_phase2
            if ($pathinfo === '/Creation/phase2') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase2Action',  '_route' => 'sujet2devspe_phase2',);
            }

            // sujet2devspe_phase1
            if ($pathinfo === '/Creation/phase1') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase1Action',  '_route' => 'sujet2devspe_phase1',);
            }

            // sujet2devspe_phase3
            if ($pathinfo === '/Creation/phase3') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase3Action',  '_route' => 'sujet2devspe_phase3',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
