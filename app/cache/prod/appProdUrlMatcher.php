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

        // sujet2redirect
        if ($pathinfo === '/choix') {
            return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::choixAction',  '_route' => 'sujet2redirect',);
        }

        // sujet2devspe_acceuil
        if ($pathinfo === '/acceuil') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::accueilAction',  '_route' => 'sujet2devspe_acceuil',);
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

            // sujet2devspe_phase4
            if ($pathinfo === '/Creation/phase4') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase4Action',  '_route' => 'sujet2devspe_phase4',);
            }

        }

        // sujet2devspe_acceuilenseignant
        if ($pathinfo === '/acceuilens') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::accueilensAction',  '_route' => 'sujet2devspe_acceuilenseignant',);
        }

        if (0 === strpos($pathinfo, '/profil')) {
            // sujet2devspe_enseignant
            if ($pathinfo === '/profilens') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::profilensAction',  '_route' => 'sujet2devspe_enseignant',);
            }

            // sujet2devspe_adresseenseignant
            if ($pathinfo === '/profiladr') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::adresse_enseignantAction',  '_route' => 'sujet2devspe_adresseenseignant',);
            }

        }

        // sujet2devspe_acceuilgestionnaire
        if ($pathinfo === '/acceuilges') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::accueilgesAction',  '_route' => 'sujet2devspe_acceuilgestionnaire',);
<<<<<<< HEAD
        }

        if (0 === strpos($pathinfo, '/Creation')) {
            // sujet2devspe_phase5
            if ($pathinfo === '/Creation/phase5') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase5Action',  '_route' => 'sujet2devspe_phase5',);
            }

            // sujet2_devspeannullersession
            if ($pathinfo === '/Creation/annuler') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::annulersessionAction',  '_route' => 'sujet2_devspeannullersession',);
            }

            // sujet2_devspevalidersession
            if ($pathinfo === '/Creation/valider') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::validersessionAction',  '_route' => 'sujet2_devspevalidersession',);
            }

=======
>>>>>>> 22e32ae7071b7448e2d74c5bc1567e7cad628a73
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
