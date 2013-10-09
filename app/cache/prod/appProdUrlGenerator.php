<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'sujet2redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::choixAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/choix',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_acceuil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/acceuil',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_phase2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Creation/phase2',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_phase1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Creation/phase1',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_phase3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase3Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Creation/phase3',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_acceuilenseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::accueilensAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/acceuilens',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_acceuilgestionnaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::accueilgesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/acceuilges',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_profilenseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::profilensAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profilens',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
