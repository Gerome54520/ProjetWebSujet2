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

        if (0 === strpos($pathinfo, '/blog')) {
            // sdzStage_accueil
            if (preg_match('#^/blog(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzStage_accueil')), array (  '_controller' => 'Sujet2\\WebBundle\\Controller\\StageController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // sdzStage_voir
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzStage_voir')), array (  '_controller' => 'Sujet2\\WebBundle\\Controller\\StageController::voirAction',  'id' => 1,));
                }

                // sdzStage_ajouter
                if ($pathinfo === '/blog/ajouter') {
                    return array (  '_controller' => 'Sujet2\\WebBundle\\Controller\\StageController::ajouterAction',  '_route' => 'sdzStage_ajouter',);
                }

            }

            // sdzStage_modifier
            if (0 === strpos($pathinfo, '/blog/modifier') && preg_match('#^/blog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzStage_modifier')), array (  '_controller' => 'Sujet2\\WebBundle\\Controller\\StageController::modifierAction',));
            }

            // sdzStage_supprimer
            if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzStage_supprimer')), array (  '_controller' => 'Sujet2\\WebBundle\\Controller\\StageController::supprimerAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
